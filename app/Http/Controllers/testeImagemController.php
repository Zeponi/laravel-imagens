<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
            //$image = Image::make('imagem/'.$imagem_nome)->resize(300, 200)->save("imagem/300_200_".$imagem_nome);
            $image = Image::make('imagem/'.$imagem_nome)->fit(1200, 600)->brightness(-20)->save("imagem/slide3_".$imagem_nome);
            $image = Image::make('imagem/'.$imagem_nome)->fit(400, 400)->save("imagem/pequena_".$imagem_nome);
            $image = Image::make('imagem/'.$imagem_nome)->fit(600, 400)->save("imagem/galeria".$imagem_nome);
        
        }
        return "Olá sou o #zeponisolucoes";
    }
}
