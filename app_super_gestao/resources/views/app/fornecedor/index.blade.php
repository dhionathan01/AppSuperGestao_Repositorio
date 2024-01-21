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
    <!--
    Operador condicional de valor default (??)
    $variavel testada não estiver definida (isset)
        ou
    $variavel testada possui o valor null
    -->
    Fornecedor : {{$fornecedores[0]['nome']}}
    <br>
    Status : {{$fornecedores[0]['status']}}
    <br>
    CNPJ : {{$fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br>
    <hr>
    Fornecedor : {{$fornecedores[1]['nome']}}
    <br>
    Status : {{$fornecedores[1]['status']}}
    <br>
    CNPJ : {{$fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido'}}

@endisset
