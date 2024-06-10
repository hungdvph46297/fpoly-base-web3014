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

    public function findByCategory($categoryId)
    {
        return $this->queryBuilder
            ->select('*')
            ->from('products')
            ->where('category_id = ?', $categoryId)
            ->fetchAllAssociative();
    }

    public function loadAllProductsByCategoryId($categoryId)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('category_id', '=', $categoryId)
            ->fetchAllAssociative();
    }

    public function chartproducts()
    {
        return $this->queryBuilder
            ->select(
                'name',
                'count(id) as slsp'
            )
            ->from($this->tableName)
            ->groupBy('name')
            ->fetchAllAssociative();
    }

}
