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
        $router->put('/{id}',           UserController::class . '@update');
        $router->delete('/{id}',        UserController::class . '@delete');
    });
    
});
// $router->get('/admin/users/',               UserController::class . '@index');Danh sach
// $router->get('/admin/users/create',         UserController::class . '@create');Hien thi form them  moi
// $router->post('/admin/users/store',         UserController::class . '@store');Luu du lieu tu form them moi vaodb
// $router->get('/admin/users/{id}',           UserController::class . '@show');xem chi tiet
// $router->get('/admin/users/{id}/edit',      UserController::class . '@edit');hien thi form cap nhat
// $router->put('/admin/users/{id}/update',   UserController::class . '@update');luu dl tu form cap nhat vao db
// $router->delete('/admin/users/{id}/delete',   UserController::class . '@delete');xoa ban ghi trong db
