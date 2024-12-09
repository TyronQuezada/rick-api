<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class errorController extends Controller{


    public function index()
    {
        $header = view('layout/headerCharacterView');
        $footer = view('layout/footerCharacterView');
        $data = [
            'header' => $header,
            'footer' => $footer,
        ];
        return view('layout/404View', $data);
    }
}
