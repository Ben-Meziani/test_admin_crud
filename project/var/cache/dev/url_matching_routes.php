<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/article' => [[['_route' => 'app_admin_article_index', '_controller' => 'App\\Controller\\AdminArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'app_admin_article_new', '_controller' => 'App\\Controller\\AdminArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        33 => [[['_route' => 'app_admin_article_show', '_controller' => 'App\\Controller\\AdminArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_admin_article_edit', '_controller' => 'App\\Controller\\AdminArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_admin_article_delete', '_controller' => 'App\\Controller\\AdminArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        88 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
