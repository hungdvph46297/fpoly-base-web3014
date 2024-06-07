<?php

use Asus\FpolyBaseWeb3014\Controllers\Client\AuthController;
use Asus\FpolyBaseWeb3014\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');

$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');

$router->mount('/client', function () use ($router) {

    // CRUD PRODUCT
    $router->mount('/listproducts', function () use ($router) {
        $router->get('/',               HomeController::class . '@listproducts');  // Danh sách
        // $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        // $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        // $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        // $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        // $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        // $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });

    $router->mount('/layouts', function () use ($router) {
        $router->get('/',               HomeController::class . '@index');  // Danh sách
        
    });
    
});