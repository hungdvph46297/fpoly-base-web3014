<?php

use Asus\FpolyBaseWeb3014\Controllers\Client\AboutController;
use Asus\FpolyBaseWeb3014\Controllers\Client\ContactController;
use Asus\FpolyBaseWeb3014\Controllers\Client\HomeController;
use Asus\FpolyBaseWeb3014\Controllers\Client\ProductController;

$router->get( '/',                 HomeController::class . '@index');

$router->get( '/about',            AboutController::class . '@index');

$router->get( '/contact',          ContactController::class . '@index');
$router->post( '/contact/store',   ContactController::class . '@index');

$router->get( '/products',         ProductController::class . '@index');
$router->get( '/products/{id}',    ProductController::class . '@index');


