<?php

use Asus\FpolyBaseWeb3014\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}',           UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->post('/{id}/delete',   UserController::class . '@delete');
    });
    
});
// $router->get('/admin/users/',               UserController::class . '@index');
// $router->get('/admin/users/create',         UserController::class . '@create');
// $router->post('/admin/users/store',         UserController::class . '@store');
// $router->get('/admin/users/{id}',           UserController::class . '@show');
// $router->get('/admin/users/{id}/edit',      UserController::class . '@edit');
// $router->post('/admin/users/{id}/update',   UserController::class . '@update');
// $router->post('/admin/users/{id}/delete',   UserController::class . '@delete');
