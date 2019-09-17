<?php

return [
    //mainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],
    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    'herbs' => [
        'controller' => 'main',
        'action' => 'herbs',
        ],
    'herbs/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'herbs',
        ],
    'tea' => [
        'controller' => 'main',
        'action' => 'tea',
    ],
    'tea/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'tea',
    ],
    'tinctures' => [
        'controller' => 'main',
        'action' => 'tinctures',
    ],
    'tinctures/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'tinctures',
    ],
    //adminController

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
//    'admin/posts' => [
//        'controller' => 'admin',
//        'action' => 'posts',
//    ],
    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
];
