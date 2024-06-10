<?php

use Asus\FpolyBaseWeb3014\Controllers\Admin\ProductController;
use Asus\FpolyBaseWeb3014\Controllers\Client\AuthController;
use Asus\FpolyBaseWeb3014\Controllers\Client\HomeController;
use Bramus\Router\Router;

$router->get('/', HomeController::class . '@index');

$router->get('/auth/login',            AuthController::class . '@showFormLogin');
$router->post('/auth/handle-login',    AuthController::class . '@login');
$router->get('/auth/logout',           AuthController::class . '@logout');

$router->mount('/client', function () use ($router) {

    // CRUD PRODUCT
    $router->mount('/listproducts', function () use ($router) {
        $router->get('/',               HomeController::class . '@listproducts');  // Danh sách
        $router->get('products/category/{id}', ProductController::class .'@listProductsByCategory');

    });

    $router->mount('/layouts', function () use ($router) {
        $router->get('/',               HomeController::class . '@index');  // Danh sách

    });
});
