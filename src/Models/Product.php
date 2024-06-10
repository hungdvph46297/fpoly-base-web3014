<?php

namespace Asus\FpolyBaseWeb3014\Models;

use Asus\FpolyBaseWeb3014\Commons\Model;

class Product extends Model
{
    protected string $tableName = 'products';

    public function allproduct()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'c.name as c_name',
                'c.id as c_id',
               
                'count(p.id) as sl'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->groupBy('p.id')
            ->orderBy('p.id', 'desc')
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



    public function paginate($page = 1, $perPage = 8)
    {
        $queryBuilder = clone ($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'desc');

        $data = $queryBuilder->fetchAllAssociative();

        return [$data, $totalPage];
    }
    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.overview',
                'p.content',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->where('p.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

    public function countProductsByCategory()
    {
        return $this->queryBuilder
            ->select('c.name', 'COUNT(p.id) as product_count')
            ->from('categories', 'c')
            ->innerJoin('c', 'products', 'p', 'c.id = p.category_id')
            ->groupBy('c.name')
            ->fetchAllAssociative();
    }

    public function getFirstLatest()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.name',
                
                'p.img_thumbnail',
                'p.created_at',
                'p.updated_at',
                'p.overview',
                'p.content',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->orderBy('p.id', 'desc')
            ->fetchAssociative();
    }

}
