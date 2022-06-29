<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "halaman home"
        ];
        return view('home',$data);
    }
}
