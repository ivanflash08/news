<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class MainController extends Controller
{
    public function indexAction()
    {
//        debug(postsCount());
        $pagination = new Pagination($this->route, 100);
        $vars = [
            'pagination' => $pagination->get(),
//            'list' => $this->model->postsList($this->route['page']),
    ];
        $this->view->render('Главная страница', $vars);
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
