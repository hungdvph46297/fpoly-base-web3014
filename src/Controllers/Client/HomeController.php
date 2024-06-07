<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;

class HomeController extends Controller
{
    public function index() {

        $this->renderViewClient('layouts/master.blade.php');
    }

    public function listproducts() {

        $this->renderViewClient('listproducts/master.blade.php');
    }

    public function topTrending(){
        
    }
}