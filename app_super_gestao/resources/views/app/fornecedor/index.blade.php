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
    Fornecedor : {{$fornecedores[1]['nome']}}
    <br>
    Status : {{$fornecedores[1]['status']}}
    <br>
    CNPJ : {{$fornecedores[1]['cnpj'] ?? ''}}
    <br>
    Telefone : {{$fornecedores[1]['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
    <br>
    Cidade:
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado Não identificado
    @endswitch
    <br>
    <hr>
    Fornecedor : {{$fornecedores[0]['nome']}}
    <br>
    Status : {{$fornecedores[0]['status']}}
    <br>
    CNPJ : {{$fornecedores[0]['cnpj'] ?? ''}}
    <br>
    Telefone : {{$fornecedores[0]['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
    <br>
    Cidade:
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado Não identificado
    @endswitch
@endisset
