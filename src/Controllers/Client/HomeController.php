<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;
use Asus\FpolyBaseWeb3014\Models\Product;

class HomeController extends Controller
{
    
    public function index() {

        $this->renderViewClient('layouts/master.blade.php');
    }
    
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function listproducts() {

         $products = $this->product->allproduct();

        $this->renderViewClient('listproducts/master.blade.php', [
            'products' => $products
        ]);

        
    }
    
    public function topTrending(){
        
    }
}