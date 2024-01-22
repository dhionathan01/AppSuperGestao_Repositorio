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
   {{--  Se o array estiver vazio ele desvia o fluxo para o conteudo dentro de @empty --}}
    @forelse ($fornecedores as $indice => $fornecedor )
        @php
            echo '<pre>';
            print_r($loop);
            echo '</pre>';
        @endphp
        Iteração atual: {{$loop->iteration}} <BR>
        Fornecedor : {{$fornecedor['nome']}}
        <br>
        Status : {{$fornecedor['status']}}
        <br>
        CNPJ : {{$fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone : {{$fornecedor['ddd'] ?? ''}}  {{$fornecedores[1]['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteração do loop
            Total de registros: {{$loop->count}}
        @endif
        @if($loop->last)
            Última iteração do loop<BR>
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset
<br>

