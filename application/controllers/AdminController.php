<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function addAction()
    {
        $this->view->render('добавить пост');
    }
    public function editAction()
    {
        $this->view->render('Редактировать Пост');
    }
    public function deleteAction()
    {
        exit('Удалить пост');
    }

    public function logoutAction()
    {
       exit('Выйти с учетной записи');
    }
}
