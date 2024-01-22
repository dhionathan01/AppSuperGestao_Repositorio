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
@for ($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor : {{$fornecedores[$i]['nome']}}
    <br>
    Status : {{$fornecedores[$i]['status']}}
    <br>
    CNPJ : {{$fornecedores[$i]['cnpj'] ?? ''}}
    <br>
    Telefone : {{$fornecedores[$i]['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
    <br>
    <hr>
@endfor
@endisset
<br>

