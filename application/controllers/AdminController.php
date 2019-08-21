<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Admin;

class AdminController extends Controller
{

    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
//        $_SESSION['admin'] = 0;
    }

    public function loginAction()
    {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;

            $this->view->location('admin/add');
        }
        $this->view->render('Вход');
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'add')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'oK');
        }
        $this->view->render('добавить пост');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->postValidate($_POST, 'edit')) {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'oK');
        }

        $this->view->render('Редактировать Пост');
    }

    public function deleteAction()
    {
        debug($this->route);
        exit('Удалить пост');
    }

    public function logoutAction()
    {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function postsAction()
    {
        $this->view->render('Посты');
    }
}
