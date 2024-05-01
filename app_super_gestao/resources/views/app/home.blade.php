@extends('app.layouts.basico')
@section('titulo', 'Home')

@section('conteudo')
    <<div class="welcome-container">
        <h1>Bem-vindo! - {{$nome}}</h1>
        <p>Obrigado por visitar nossa página. Esperamos que você goste da sua estadia!</p>
    </div>
@endsection
