<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Pages extends BaseController
{
    protected $categoryModel, $productModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->productModel = new ProductModel();
    }
    public function home()
    {
        $category = $this->categoryModel->findAll();
        $product = $this->productModel->getProductLimited();
        $counter = 0;
        // $i = 0;
        foreach ($category as $ctg) {
            $counter = 0;
            // $i=0;
            foreach ($product as $key=> $prd) {
                //dd($product[$i]);
                if ($prd['category_name'] == $ctg['category_name']) {
                    $counter++;
                    if ($counter>1){
                        unset($product[$key]);
                    }
                    // $i++;
                }
            }
        }
        // dd($product);
        $data = [
            "tittle"=>"Home",
            "product"=>$product,
        ];
        return view('pages/home',$data);
    }
    public function about_us()
    {
        $data = [
            "tittle"=>"About Us"
        ];
        return view('pages/about_us',$data);
    }
}
