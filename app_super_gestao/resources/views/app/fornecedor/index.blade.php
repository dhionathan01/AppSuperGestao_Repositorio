<h3>Fornecedor</h3>
@php
/*
    if(isset($variavel)){} Executa uma ação se ela for true / isset verifica se a variavel ou indice array foi definido retornando true
*/
@endphp

@isset($fornecedores)
    Fornecedor : {{$fornecedores[0]['nome']}}
    <br>
    Status : {{$fornecedores[0]['status']}}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ : {{$fornecedores[0]['cnpj']}}
        <br>
    @endisset
    <hr>
    Fornecedor : {{$fornecedores[1]['nome']}}
    <br>
    Status : {{$fornecedores[1]['status']}}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ : {{$fornecedores[1]['cnpj']}}
        <br>
    @endisset
@endisset
