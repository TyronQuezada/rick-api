<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class CharacterController extends Controller{

    public function index($page = 1){
        // Llamada a tu helper para obtener personajes según la página
        $url = "https://rickandmortyapi.com/api/character/?page=" . $page;
        $characters = getApi($url);
        $header = view('layout/headerCharacterView');
        $footer = view('layout/footerCharacterView');
        $data = [
            'header' => $header,
            'footer' => $footer,
            'characters' => $characters,
        ];
        return view('layout/charactersView',$data);
    }

}