<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'product_id';

    public function getProductByCategory($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this
            ->join('category', 'category.category_id=product.category_id')
            ->where(['category.category_slug' => $slug])
            ->findAll(); //->where(['product.category_slug'=>$slug])
    }
    public function getProductDetailed($p_slug = false)
    {
        if ($p_slug==false) {
            return $this->findAll();
        }
        return $this
            ->join('category', 'category.category_id=product.category_id')
            ->where(['product.product_slug' => $p_slug])
            ->findAll(); //->where(['product.category_slug'=>$slug])
    }
    public function getProductLimited()
    {
        return $this
            ->join('category', 'category.category_id=product.category_id')
            // ->where(['category.category_slug' => $slug])
            //->limit(3)
            //->findAll()
            ->orderBy('category.category_id')
            ->findAll()
            ; //->where(['product.category_slug'=>$slug])
    }
}
