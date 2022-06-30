<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CartModel;

class User extends BaseController
{
    protected $userModel;
    protected $cartModel;
    public function __construct()
    {
        $this->userModel = new UserModel() ;
        $this->cartModel = new CartModel() ;
    }
    public function index()
    {
        $data = [
            "tittle"=>"Login and Registration"
        ];
        helper(['form']);
        return view('user/index',$data);
    }
    
    public function login()
    {
        
        helper(['form']);
        $errors=[
            'password'=>[
                "validateUser"=>"Email or Password don't match"
            ]
        ];
        $validation = $this->validate([
            'email'=>'required|valid_email|',
            'password'=>'required|min_length[8]|max_length[50]|validateUser[email,password]',
        ],$errors);
        
        if(!$validation){
            // $data = [
            //     "tittle"=>"Register"
            // ];
            return view('user/index',['validation'=>$this->validator,'login'=>'login']);
        }
        else{
            // $newData = [
            //     'email'=> $this->request->getVar('email'),
            //     'fullname'=> $this->request->getVar('fullname'),
            //     'address'=> $this->request->getVar('address'),
            //     'password'=> $this->request->getVar('password'),
            //     'role'=>'customer'
            // ];
        
            // $this->userModel->save($newData);
            $user=$this->userModel->where('email',$this->request->getVar('email'))->first();
            $this->setUserSession($user);
            // session()->setFlashdata('success','Login Successful');
            // dd(previous_url(true));
            if (session()->has('current_url')) {
                # code...
                return redirect()->to(session()->get('current_url'));
            }
            return redirect()->to(base_url('/'));
        }
        // return view('user/index',$data);
        //dd($_POST) ;
    }
    private function setUserSession($user)
    {
        $cartItem = $this->cartModel->findCartDecoded((int)$user['user_id']);
        if (count($cartItem)==0){
            $this->cartModel->save(['user_id'=>(int)$user['user_id']]);
            $cartItem=[];
            $cartItem = $this->cartModel->findCartDecoded((int)$user['user_id']);
        }
        if($cartItem[0]['cart_item']==null){
            $cartItem[0]['cart_item'] = [];
        }
        $data=[
            'user_id'=>$user['user_id'],
            'fullname'=>$user['fullname'],
            'email'=>$user['email'],
            'address'=>$user['address'],
            'role'=>$user['role'],
            'cart_id'=>$cartItem[0]['cart_id'],
            'cart_item'=>$cartItem[0]['cart_item'],
            'isLoggedIn'=>true,
        ];
        session()->set($data);
        return true;
    }
    
    public function register()
    {
        
        helper(['form']);
        $validation = $this->validate([
            'email'=>'required|valid_email|is_unique[user.email]',
            'fullname'=>'required',
            'address'=>'required',
            'password'=>'required|min_length[8]|max_length[50]',
            // 'password_confirm'=>'required|min_length[8]|max_length[50]|matches[password]',
            'password_confirm'=> [
                'label'  => 'password confirmation',
                'rules'  => 'required|min_length[8]|max_length[50]|matches[password]',
                'errors' => [
                    'matches' => "Your password confirmation don't match",
                ],
            ],
        ]);
        if(!$validation){
            // $data = [
            //     "tittle"=>"Register"
            // ];
            return view('user/index',['validation'=>$this->validator,'register'=>'register']);
        }
        else{
            $newData = [
                'email'=> $this->request->getVar('email'),
                'fullname'=> $this->request->getVar('fullname'),
                'address'=> $this->request->getVar('address'),
                'password'=> $this->request->getVar('password'),
                'role'=>'customer'
            ];
            $this->userModel->save($newData);
            session()->setFlashdata('success','Registration Successful');
            return redirect()->to(base_url('/user'));
        }
        // return view('user/index',$data);
        //dd($_POST) ;
    }
    public function profile()
    {
        helper(['form']);
            $profile = $this->userModel->select('email,fullname,address,user_img')->where(['user_id'=>session()->get('user_id')])->find();
            
            // dd(session());
            return view('/user/profile',['profile'=>$profile,'tittle'=>'Profile']);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
    
}
