<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Catalogue extends BaseController
{
    protected $categoryModel, $productModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        $category = $this->categoryModel->findAll();
        $product = $this->productModel->getProductLimited();
        $counter = 0;
        $i = 0;
        foreach ($category as $ctg) {
            $counter = 0;
            $i=0;
            foreach ($product as $prd) {
                //dd($product[$i]);
                if ($prd['category_name'] == $ctg['category_name']) {
                    $counter++;
                    if ($counter>3){
                        unset($product[$i]);
                    }
                }
                $i++;
            }
        }
        // dd($product);
        // exit;
        $data = [
            "tittle" => "Catalogue",
            "category" => $category,
            "product" => $product
        ];
        // dd($category);
        return view('catalogue/index', $data);
    }
    public function category($slug)
    {
        $data = [
            "tittle" => "Product",
            "product" => $this->productModel->getProductByCategory($slug),
            "category" => $this->categoryModel->findAll()
        ];
        return view('catalogue/category', $data);
    }
    public function product($p_slug){
        $product = $this->productModel->getProductDetailed($p_slug);
        //dd($product[0]['product_size']);
        $size = explode(',',$product[0]['product_size']) ;
        $product[0]['product_size']=$size;
        //dd($product);
        $data = [
            "tittle" => "Product",
            "product" => $product,
            "category" => $this->categoryModel->findAll()
        ];
        //dd($data);
        return view('catalogue/detail', $data);
    }
}
