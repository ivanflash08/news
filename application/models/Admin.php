<?php

namespace application\models;

use application\core\model;


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

        $nameLen = iconv_strlen($post['name']);
        $descriptionLen = iconv_strlen($post['description']);
        $messageLen = iconv_strlen($post['text']);

        if ($nameLen < 3 or $nameLen > 150) {
            $this->error = 'название от 3 до 150 символов';
            return false;
        } elseif ($descriptionLen < 3 or $descriptionLen > 150) {
            $this->error = 'название от 3 до 150 символов';
            return false;
        } elseif ($messageLen < 10 or $nameLen > 5000) {
            $this->error = 'текст должен содержать от 10 до 5000 символов';
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
            'dates' =>  date("Y-m-d H:i:s"),
        ];
        $this ->db->query('INSERT INTO posts VALUES ( :id, :name, :description, :text, :dates)', $params);

        return $this->db->lastInsertId();
    }

    public function postUploadImage($path,$id) {
        move_uploaded_file($path, 'public/materials/'.$id.'.jpg');
    }

}
