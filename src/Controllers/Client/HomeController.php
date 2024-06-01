<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;
use Asus\FpolyBaseWeb3014\Commons\Helper;
use Asus\FpolyBaseWeb3014\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        $user = new User();

        Helper::debug($user);

        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
