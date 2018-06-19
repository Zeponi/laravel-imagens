<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeImagemController extends Controller
{
    public function teste1() {
        return view("teste1");
    }

    public function teste1Post(Request $request) {

        $this->validate($request,[
            "imagem"=>"required|image|dimensions:min_width=600,min_height=600"
        ],[
            "imagem.required"=>"Preencha uma imagem",
            "imagem.image"=>"Preencha uma imagem válida",
        ]);

        if($request->hasFile('imagem')) {
            // $imagem = $request->file('imagem');
            $imagem = $request->imagem;
            $imagem_nome = time().$imagem->getClientOriginalName();
            $imagem->move("imagem/",$imagem_nome);

            dd($imagem_nome);
        }
        return "Olá sou o #zeponisolucoes";
    }
}
