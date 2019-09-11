<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller
{
    public function indexAction()
    {
            $pagination = new Pagination($this->route, $this->model->postsCount());
            $vars = [
                'pagination' => $pagination->get(),
                'list' => $this->model->postsList($this->route),
            ];
            $this->view->render('Главная страница', $vars);
    }

    public
    function aboutAction()
    {
        $this->view->render('О нас');
    }

    public
    function contactAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->contactValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            mail('youadmin@ro.ru', 'Сообщенние с Вашего сайта от:' . $_POST['name'], $_POST['message']);
            $this->view->message('success', 'Сообщение отправлено.');
        }
        $this->view->render('Написать админу');
    }

    public
    function postAction()
    {
        $adminModel = new Admin;
        if (!$adminModel->isPostExists($this->route['id'])) {
            $this->view->errorCode(404);
        }
        $vars = [
            'data' => $adminModel->postData($this->route['id'])[0],
        ];

        $this->view->render('Статья', $vars);
    }

}
