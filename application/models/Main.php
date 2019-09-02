<?php

namespace application\models;

use application\core\model;


class Main extends Model
{

    public $error;

    public function contactValidate($post)
    {
        $nameLen = iconv_strlen($post['name']);
        $messageLen = iconv_strlen($post['message']);

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

    public function postsCount() {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }
    public function postsList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => ((($route['page'] ?? 1) - 1) * $max),
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }
}
