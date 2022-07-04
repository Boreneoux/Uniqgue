<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use App\Models\CartModel;
use App\Models\OrderModel;

class Order extends BaseController
{
    protected $paymentModel, $cartModel, $orderModel;
    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
        $this->cartModel = new CartModel();
        $this->orderModel = new OrderModel();
    }
    public function index()
    {
        if (session()->has('orderProceed')) {
            session()->remove('orderProceed');
        }
        $orderRequest = $this->request->getVar();
        $orderProceed = [];
        foreach ($orderRequest as $key => $value) {
            $current = explode('_', $key);
            if ($current[0] == 'key') {
                $orderProceed[] = (int)$current[1];
            }
        }
        $cart = session()->get('cart_item');
        // $cartUpdate=[];
        $purchased = [];
        $total = 0;
        // dd($orderProceed);
        // dd($cart);
        foreach ($orderProceed as $key => $order) {
            // $current=explode('_',$key);
            // if($current[0]=='key'){
            $purchased[] = $cart[(int)$order];
            $total += $purchased[$key]['qty_times_price'];
            // unset($cart[$order]);
            // }
        }
        session()->set(['orderProceed' => $orderProceed]);
        // dd($purchased);
        return view('order/index', ['tittle' => 'Checkout', 'orderProceed' => $orderProceed, 'payment' => $this->paymentModel->findAll(), 'total' => $total, 'purchased' => $purchased]);
    }
    public function buy()
    {
        helper(['form']);
        // dd((int)$this->request->getVar('payment'));
        $paymentName = $this->paymentModel->select('payment_name')->where(['payment_id'=>(int)$this->request->getVar('payment')])->find();
        // dd($paymentName);
        $paymentName=(string)$paymentName[0]['payment_name'];
        $prepOrderID = $this->uniqidReal();
        $chekOrderExist = $this->orderModel->select('order_id')->where(['order_id' => $prepOrderID])->find();
        while (count($chekOrderExist) != 0) {
            $prepOrderID = $this->uniqidReal();
            $chekOrderExist = $this->orderModel->select('order_id')->where(['order_id' => $prepOrderID])->find();
        }
        // dd($prepOrderID);
        // dd($this->request->getVar());
        $validation = $this->validate([
            'payment' => 'required',
        ]);
        if (!$validation) {
            return view('order/index', ['validation' => $this->validator, 'orderProceed' => session()->get('orderProceed'), 'payment' => $this->paymentModel->findAll()]);
        } else {
            $cart = session()->get('cart_item');
            $orderProceed = session()->get('orderProceed');
            // dd($orderProceed);
            // dd($cart);
            // $cartUpdate=[];
            $purchased = [];
            $total = 0;
            // dd($orderProceed);
            // dd($cart);
            foreach ($orderProceed as $key => $order) {
                // $current=explode('_',$key);
                // if($current[0]=='key'){
                $purchased[] = $cart[(int)$order];
                $total += $purchased[$key]['qty_times_price'];
                unset($cart[$order]);
                // }
            }
            $cart = array_values($cart);
            // dd($cart);
            // dd($this->uniqidReal());
            session()->remove('cart_item');
            session()->remove('orderProceed');
            session()->set(['cart_item' => $cart]);

            $forCartInDB = [
                'cart_id' => session()->get('cart_id'),
                'cart_item' => $cart,
            ];
            $forOrderInDB = [
                'order_id' => $prepOrderID,
                'user_info' => [
                    'fullname' => session()->get('fullname'),
                    'email' => session()->get('email'),
                    'address' => session()->get('address'),
                    'kode_pos' => session()->get('kode_pos'),
                    'payment_id' => (int)$this->request->getVar('payment'),
                    'payment_name' => $paymentName,
                ],
                'user_id' => session()->get('user_id'),
                'purchased' => $purchased,
                'payment_id' => (int)$this->request->getVar('payment'),
                'total' => $total,
            ];
            // dd($forCartInDB);
            $this->cartModel->save($forCartInDB);
            $this->orderModel->save($forOrderInDB);
            session()->remove('orderProceed');
            // dd($purchased);
            session()->setFlashdata(['success_tr'=>'Transaction successful!']);
            return redirect()->to(base_url('cart'));
            // $this->cartModel->save($cart);
        }
    }
}
