<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;
use Asus\FpolyBaseWeb3014\Models\Category;
use Asus\FpolyBaseWeb3014\Models\Product;

class ProductController extends Controller
{
    protected Category $productModel;
    protected Category $categoryModel;

    public function __construct()
    {
        $this->productModel = new Category();
        $this->categoryModel = new Category();
    }

    public function loadAllProductsByCategoryId($categoryId)
    {
        $products = $this->productModel->findByCategory($categoryId);
        $categories = $this->categoryModel->allcategories();

        $this->renderViewClient('listproducts/category/listProductsByCategory.blade.php', [
            'products' => $products,
            'categories' => $categories,
            'currentCategory' => $categoryId
        ]);
    }
}
