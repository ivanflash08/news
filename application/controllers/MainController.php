<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }

    public function aboutAction()
    {
        $this->view->render('О нас');
    }

    public function contactAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            mail('youadmin@ro.ru', 'Сообщенние с Вашего сайта от:'.$_POST['name'], $_POST['message']);
            $this->view->message('success', 'Сообщение отправлено.');
        }
        $this->view->render('Написать админу');
    }

    public function postAction()
    {
        $this->view->render('Статья');
    }

}
