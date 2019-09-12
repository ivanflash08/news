<?php /** @noinspection ALL */

namespace application\models;

use application\core\Model;
use \Imagick;


class Admin extends Model
{

    public $error;

    public function loginValidate($post)
    {
        $config = require 'application/config/admin.php';
        if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
            $this->error = 'логин или пароль указан не верно';
            return false;
        }
        return true;
    }

    public function postValidate($post, $type)
    {

        $nameLen = strlen($post['name']);
        $descriptionLen = strlen($post['description']);
        $textLen = strlen($post['text']);

        if ($nameLen < 3 or $nameLen > 150) {
            $this->error = 'название от 3 до 150 символов';
            return false;
        } elseif ($descriptionLen < 3 or $descriptionLen > 150) {
            $this->error = 'название от 3 до 150 символов';
            return false;
        } elseif ($textLen < 3 or $textLen > 15000) {
            $this->error = 'текст от 3 до 15000 символов';
            return false;
        }

        if (empty($_FILES['img']['tmp_name']) and $type === 'add') {
            $this->error = 'Добавте пожалуйста изображение';
            return false;
        }
        return true;
    }

    public function postAdd($post)
    {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
            'date' => date("Y-m-d H:i:s"),
        ];
        $this->db->query('INSERT INTO posts VALUES (:id, :name, :description, :text, :date)', $params);

        return $this->db->lastInsertId();
    }

    public function postEdit($post, $id)
    {
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
            'date' => date("Y-m-d H:i:s"),
        ];
        $this->db->query('UPDATE posts SET name = :name, description = :description, text = :text, date = :date WHERE id = :id', $params);
    }


    public function postUploadImage($path, $id)
    {
        try {
            $im = new Imagick($path);
            $im->cropThumbnailImage(1080, 720, false);
            $im->setImageCompressionQuality(80);
            $im->writeImage('/public/materials/' . $id . '.jpg');
        } catch (\ImagickException $e) {
            move_uploaded_file($path, 'public/materials/' . $id . '.jpg');
        }
    }

    public function isPostExists($id)
    {
        $params = [
            'id' => $id,
        ];
        return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
    }

    public function postDelete($id)
    {
        $params = [
            'id' => $id,
        ];
        $this->db->query('DELETE FROM posts WHERE id = :id', $params);
        unlink('public/materials/' . $id . '.jpg');
    }

    public function postData($id)
    {
        $params = [
            'id' => $id,
        ];
        return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
    }
}
