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
    @php $i = 0 @endphp
    @while (isset($fornecedores[$i]))
        Fornecedor : {{$fornecedores[$i]['nome']}}
        <br>
        Status : {{$fornecedores[$i]['status']}}
        <br>
        CNPJ : {{$fornecedores[$i]['cnpj'] ?? ''}}
        <br>
        Telefone : {{$fornecedores[$i]['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
        <br>
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
<br>

