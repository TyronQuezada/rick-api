<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $inicio = getAll();
        $header = view('layout/headerView');
        $footer = view('layout/footerView');
        $data = [
            'inicio' => $inicio,
            'header' => $header,
            'footer' => $footer,
        ];
        return view('index',$data);
    }
}
