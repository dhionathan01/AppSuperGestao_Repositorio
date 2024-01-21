<h3>Fornecedor</h3>
@php
/*
    if(!<condição>){} Executa uma ação se ela for true
*/
@endphp
{{-- @unless  executa se a ação for false --}}
Fornecedor : {{$fornecedores[0]['nome']}}
<br>
Status : {{$fornecedores[0]['status']}}
<br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') {{-- Se o retorno da condição for false --}}
    Fornecedor Inativo (Com unless)
@endunless
