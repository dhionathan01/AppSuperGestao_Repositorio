<h3>Fornecedor</h3>
@php
/*
    if(empty($variavel)){} Executa uma ação se ela for true / empty verifica se a variavel estiver vazia
    - ''
    - 0
    - 0.0
    - null
    - false
    - array()
    - $var / ela existe mas n tem valor
*/
@endphp

@isset($fornecedores)
    Fornecedor : {{$fornecedores[0]['nome']}}
    <br>
    Status : {{$fornecedores[0]['status']}}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ : {{$fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
            CNPJ existente mas vazio
        @endempty
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
