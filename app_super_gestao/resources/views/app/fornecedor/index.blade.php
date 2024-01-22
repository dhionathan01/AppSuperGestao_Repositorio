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
    @foreach ($fornecedores as $indice => $fornecedor )
        Fornecedor : {{$fornecedor['nome']}}
        <br>
        Status : {{$fornecedor['status']}}
        <br>
        CNPJ : {{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone : {{$fornecedor['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
        <br>
        <hr>
    @endforeach
@endisset
<br>

