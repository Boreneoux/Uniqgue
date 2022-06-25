<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            "tittle"=>"Home"
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
