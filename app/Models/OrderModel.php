<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'order';
    protected $primaryKey = 'order_id';
    protected $useAutoIncrement = false;
    protected $allowedFields =['order_id','user_id','purchased','order_at','user_info','total','payment_id'] ;
    protected $useTimestamps = true;
    protected $createdField  = 'order_at';
    protected $updatedField  = null;
    protected $beforeInsert = ['beforeInsert'] ;
    protected $beforeUpdate = ['beforeUpdate'] ;

    
    protected function beforeInsert($data)
    {
        if(isset($data['data']['purchased'])){
            $data['data']['purchased'] = json_encode($data['data']['purchased']);
            $data['data']['user_info'] = json_encode($data['data']['user_info']);
        }
        return $data;
    }
    protected function beforeUpdate($data)
    {
        if(isset($data['data']['purchased'])){
            $data['data']['purchased'] = json_encode($data['data']['purchased']);
            $data['data']['user_info'] = json_encode($data['data']['user_info']);
        }
        return $data;
    }
}
