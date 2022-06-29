<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'cart';
    protected $primaryKey = 'cart_id';
    protected $allowedFields =['cart_id','user_id','cart_item','cart_created_at','cart_updated_at'] ;
    protected $useTimestamps = true;
    protected $createdField  = 'cart_created_at';
    protected $updatedField  = 'cart_updated_at';
    protected $beforeInsert = ['beforeInsert'] ;
    protected $beforeUpdate = ['beforeUpdate'] ;

    public function findCartDecoded(int $user_id=null)
    {
        if(isset($user_id)){
            $cart = $this->where(['user_id'=>$user_id])->findAll(1);
            // dd($cart['cart_item']);
            // dd($cart);
            $itemDecoded = [];
            foreach($cart as $key=>$ct){
                // if(isset($ct['cart_item'])){
                $itemDecoded = json_decode($ct['cart_item'],true);
                // }
                // $ct['cart_item'] = $itemDecoded;
                // dd($itemDecoded);
                // dd($itemDecoded['ngab']);
                // dd($ct['cart_item']);
                // $ct['cart_item'] =[];
                $cart[$key]['cart_item'] =$itemDecoded;
                // dd($ct['cart_item']);
                // dd($cart[0]['cart_item']);
                // dd($ct);
                // return $cart;
            }
            // dd($cart);
            return $cart;
        }
        return false;
        // else{
        //     $cart= $this->findAll();
        //     foreach($cart as $ct){
        //         $itemDecoded = json_decode($ct['cart_item']);
        //         $ct['cart_item'] =$itemDecoded;
        //     }
        //     return $cart;
        // }
    }
    protected function beforeInsert($data)
    {
        if(isset($data['data']['cart_item'])){
            $data['data']['cart_item'] = json_encode($data['data']['cart_item']);
        }
        return $data;
    }
    protected function beforeUpdate($data)
    {
        if(isset($data['data']['cart_item'])){
            $data['data']['cart_item'] = json_encode($data['data']['cart_item']);
        }
        return $data;
    }
}
