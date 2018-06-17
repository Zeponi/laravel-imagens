@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h3>Teste1</h3>
        <form action="teste1" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="file-field input-field">
                <div class="btn">
                    <span>Carregar imagem</span>
                    <input type="file" name="imagem">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <button class="btn blue">Enviar</button>
        </form>
    </div>
</div>
@endsection
