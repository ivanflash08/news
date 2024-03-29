<?php

namespace application\models;

use application\core\Model;


class Main extends Model
{

    public $error;

    public function contactValidate($post)
    {
        $nameLen = strlen($post['name']);
        $messageLen = strlen($post['message']);

        if ($nameLen < 3 or $nameLen > 25) {
            $this->error = 'Не коректрная длина имени';
            return false;
        } elseif (empty($post['email'])) {
            $this->error = 'Введите адресс электронной почты';
            return false;
        } elseif ($messageLen < 10 or $nameLen > 500) {
            $this->error = 'текст должен содержать от 10 до 500 символов';
            return false;
        }
        return true;
    }

    public function postsCount()
    {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }


    public function postsList($route)
    {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (((isset($route['page']) ? $route['page'] : 1) - 1) * $max),
        ];
//        debug($params['start']);

        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }

    public function herbsCount()
    {
        return $this->db->column('SELECT COUNT(id) WHERE category_id = 1 FROM posts');
    }

    public function herbsList($route)
    {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (((isset($route['page']) ? $route['page'] : 1) - 1) * $max),
        ];
//        debug($params['start']);

        return $this->db->row('SELECT * FROM posts WHERE category_id = 1 ORDER BY id DESC LIMIT :start, :max', $params);
    }


    public function teaList($route)
    {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (((isset($route['page']) ? $route['page'] : 1) - 1) * $max),
        ];
//        debug($params['start']);

        return $this->db->row('SELECT * FROM posts WHERE category_id = 2 ORDER BY id DESC LIMIT :start, :max', $params);
    }
    public function tincturesList($route)
    {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (((isset($route['page']) ? $route['page'] : 1) - 1) * $max),
        ];
//        debug($params['start']);

        return $this->db->row('SELECT * FROM posts WHERE category_id = 3 ORDER BY id DESC LIMIT :start, :max', $params);
    }
}
