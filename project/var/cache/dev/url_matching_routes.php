<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/article' => [[['_route' => 'app_admin_article_index', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'app_admin_article_new', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/article/([^/]++)(?'
                    .'|(*:33)'
                    .'|/edit(*:45)'
                    .'|(*:52)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:88)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_admin_article_show', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_admin_article_edit', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_admin_article_delete', '_controller' => 'App\\Controller\\Admin\\AdminArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        88 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
