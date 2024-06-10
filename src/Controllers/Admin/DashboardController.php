<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Admin;

use Asus\FpolyBaseWeb3014\Commons\Controller;
use Asus\FpolyBaseWeb3014\Models\Product;

class DashboardController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function dashboard()
    {
        $product = $this->product->countProductsByCategory();
        $this->renderViewAdmin('dashboard', [
            'product' => $product
        ]);
    }
}
