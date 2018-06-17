<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeImagemController extends Controller
{
    public function teste1() {
        return view("teste1");
    }

    public function teste1Post(Request $request) {
        if($request->hasFile('imagem')) {
            dd("-------- Entrou --------");
        }
        return "Olá sou o #aiquefome";
    }
}
