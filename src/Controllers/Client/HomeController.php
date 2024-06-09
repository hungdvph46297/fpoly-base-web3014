<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;
use Asus\FpolyBaseWeb3014\Models\Category;
use Asus\FpolyBaseWeb3014\Models\Product;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {

        $this->renderViewClient('layouts/master.blade.php');
    }

    private Product $product;
    private Category $categories;
    private Product $paginate;

    public function __construct()
    {
        $this->product = new Product();
        $this->categories = new Category();
        $this->paginate = new Product();
    }


    public function listproducts()
{
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    list($paginatedProducts, $totalPage) = $this->paginate->paginate($currentPage);

    $categories = $this->categories->allcategories();


    $this->renderViewClient('listproducts/master.blade.php', [
        'products' => $paginatedProducts,
        'categories' => $categories,
        'currentPage' => $currentPage,
        'totalPage' => $totalPage,
    ]);
}


    public function topTrending()
    {
    }
}
