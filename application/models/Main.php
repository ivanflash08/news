<?php

namespace application\models;

use application\core\model;


class Main extends Model{

    public function getNews(){
        $result = $this->db->row('SELECT title, `text` FROM news');
        return $result;
    }
}
