<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin_article_index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminArticleController::index'], [], [['text', '/admin/article/']], [], [], []],
    'app_admin_article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminArticleController::new'], [], [['text', '/admin/article/new']], [], [], []],
    'app_admin_article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_admin_article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_admin_article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
