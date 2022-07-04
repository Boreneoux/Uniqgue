<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class Cart extends BaseController
{
    protected $cartModel, $productModel;
    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $this->get_current_url();
        // dd(session()->get('orderProceed'));
        if (
            session()->has('orderProceed') ||
            session()->has('purchased') ||
            session()->has('total')
        ) {
            session()->remove('orderProceed');
            session()->remove('purchased');
            session()->remove('total');
        }
        // dd(session()->get('purchased'));
        $data = [
            "tittle" => "Cart",
            'cart' => $this->cartModel->findCartDecoded((int)session()->get('user_id'))
        ];
        // $json_check = [
        //     'ngab'=>'ngaber'
        // ];
        // $testData =[
        //     'qty'=>1,
        //     'json_check'=>json_encode($json_check)
        // ] ;
        // $this->cartModel->save($testData);
        return view('cart/index', $data);
    }
    public function add($slug = false)
    {
        if (isset($slug)) {
            $productIsExist = $this->productModel->select('product_slug')->where('product_slug', $slug)->first();
            //cek product pakek slug, kalo gk ada productnya atau slug kosong redirect ke catalogue index
            if (isset($productIsExist) || $productIsExist != '') {
                //kalo ada, validasi input, kalo lolos validasi baru push ke cart item di session
                $validation = $this->validate([
                    'qty' => [
                        'label' => 'Quantity',
                        'rules' => 'required|greater_than[0]',
                        'errors' => [
                            'greater_than' => 'Quantity should be greater than 0 !'
                        ]
                    ],
                    'price' => 'required',
                    'size' => 'required',
                ]);
                if (!$validation) {
                    $slug = $this->request->getVar('slug');
                    // $this->get_current_url();
                    // return view("catalogue/detail", ['validation' => $this->validator]);
                    // dd(session()->get('current_url'));
                    session()->setFlashdata(['validation' => $this->validator]);
                    return redirect()->to(session()->get('current_url'));
                } else {
                    $newCart = [
                        // 'cart'=>[
                        [
                            // 'email'=> session()->get('email'),
                            // 'fullname'=> session()->get('fullname'),
                            // 'cart_id'=> session()->get('fullname'),
                            'product_slug' => $this->request->getVar('slug'),
                            'product_name' => $this->request->getVar('product_name'),
                            'qty' => (int)$this->request->getVar('qty'),
                            'size' => $this->request->getVar('size'),
                            'price' => (int)$this->request->getVar('price'),
                            'qty_times_price' => (int)$this->request->getVar('price') * (int)$this->request->getVar('qty'),
                        ]
                        // ]                        
                    ];
                    // dd($newCart);
                    // dd(session()->get());
                    session()->push('cart_item', $newCart);
                    $cartExist = $this->cartModel->select('cart_id')->where('user_id', session()->get('user_id'))->first();
                    // dd($cartExist);
                    if ($cartExist['cart_id']) {
                        $forCartInDB = [
                            'cart_id' => session()->get('cart_id'),
                            'cart_item' => session()->get('cart_item')
                        ];
                    } else {
                        $forCartInDB = [
                            'user_id' => session()->get('user_id'),
                            'cart_item' => session()->get('cart_item')
                        ];
                    }
                    $this->cartModel->save($forCartInDB);
                    session()->setFlashdata(['success' => 'Successfully added!']);
                    return redirect()->to(session()->get('current_url'));
                    // dd(session()->get('cart_item'));
                }
            }
            //pakek cart yang di session baru update cart di db
        }
    }
    public function edit()
    {
        session()->set(['cart_edit' => true]);
        return redirect()->to(base_url('/cart'));
    }
    public function save()
    {

        $cartUpdate = $this->request->getVar();
        $cartInSession = session()->get('cart_item');
        $old_qty = [];
        $new_qty = [];
        // $current_arr=[];
        $newCart = [];
        // dd(explode('_','qtyold_1'));
        // dd($cartUpdate);
        foreach ($cartUpdate as $key => $qty) {
            $current = explode('_', $key);
            if ($current[0] == 'qtyold') {

                // $current_arr=[
                //     (int)$current[1]=>(int)$qty
                // ];
                // array_push($old_qty,$current_arr);
                // $old_qty[]=$current_arr;

                $old_qty[(int)$current[1]] = (int)$qty;
                // $current_arr = [];
            }
            if ($current[0] == 'qty') {
                // $current_arr=[
                //     (int)$current[1]=>(int)$qty
                // ];
                $new_qty[(int)$current[1]] = (int)$qty;
                // array_push($new_qty,$current_arr);
                // $new_qty[]=$current_arr;
                // $current_arr = [];
                if ($old_qty[(int)$current[1]] != $new_qty[(int)$current[1]]) {
                    // array_push($newCart,$new_qty);
                    $newCart[(int)$current[1]] = $new_qty[(int)$current[1]];
                } else {
                    // array_push($newCart,$old_qty);
                    $newCart[(int)$current[1]] = $old_qty[(int)$current[1]];
                }
            }
        }


        foreach ($cartInSession as $index => $cartItem) {
            if ($cartInSession[$index]['qty'] != $newCart[$index]) {
                $cartInSession[$index]['qty'] = $newCart[$index];
                $cartInSession[$index]['qty_times_price'] = $newCart[$index] * $cartInSession[$index]['price'];
            }
        }
        session()->remove('cart_item');
        session()->set(['cart_item' => $cartInSession]);
        $forCartInDB = [
            'cart_id' => session()->get('cart_id'),
            'cart_item' => session()->get('cart_item')

        ];
        // dd($forCartInDB);
        $this->cartModel->save($forCartInDB);
        // dd(session()->get('cart_item'));

        session()->set(['cart_edit' => false]);
        session()->setFlashdata(['success' => 'Successfully edited !']);

        return redirect()->to(base_url('/cart'));
        // dd($cartInSession);
        // dd($newCart);
    }
    public function delete($key)
    {
        $key = (int)$key;
        $cartItem = session()->get('cart_item');
        foreach ($cartItem as $index => $item) {
            if ($index == $key) {
                unset($cartItem[$key]);
            }
        }
        $cartItem = array_values($cartItem);
        // dd($cartItem);
        session()->remove('cart_item');
        session()->set(['cart_item' => $cartItem]);
        $forCartInDB = [
            'cart_id' => session()->get('cart_id'),
            'cart_item' => session()->get('cart_item')
        ];
        $this->cartModel->save($forCartInDB);
        return redirect()->to(base_url('/cart'));
        // dd($key);
    }
    public function cancel()
    {
        session()->set(['cart_edit' => false]);
        return redirect()->to(base_url('/cart'));
    }
}
