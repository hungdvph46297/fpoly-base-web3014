<?php 

namespace Asus\FpolyBaseWeb3014\Models;

use Asus\FpolyBaseWeb3014\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';
    
    public function allcategories()
   {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->orderBy('id', 'desc')
        ->fetchAllAssociative();
    }

    public function findProductsByCategoryId($categoryId) {
        return $this->queryBuilder
            ->select('*')
            ->from('products')
            ->where('category_id = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->fetchAllAssociative();
    }

}