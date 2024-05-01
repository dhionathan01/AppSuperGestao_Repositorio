@extends('app.layouts.basico')
@section('titulo', 'Contato')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Contatos - Listar </p>
        </div>
        <div class="informacao-pagina">
            <div style="width: 90%; margin-left:auto; margin-right:auto;">
                <table border="1" width='100%'>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Motivo Contato</th>
                            <th>E-mail</th>
                            <th>Descrição</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($contatos as $contato)
                            <tr>
                                <td>{{ $contato->nome }}</td>
                                <td>{{ $contato->telefone }}</td>
                                <td>{{ $contato->motivo_contato->motivo_contato}}</td>
                                <td>{{ $contato->email }}</td>
                                <td>{{ $contato->mensagem }}</td>
                                <td><a href="{{route('app.contato.excluir', $contato->id)}}">Excluir</a></td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
                {{$contatos->appends($request)->links()}}
                <br>
               {{--  {{$contatos->count()}} - Total de registros por página
                <br>
                {{$contatos->total()}} - Total de registros da consulta
                <br>
                {{$contatos->firstItem()}} - Número do primeiro registro da página
                <br>
                {{$contatos->lastItem()}} - Número do último registro da página
                <br> --}}
                Exibindo {{$contatos->count()}} contatoes de {{$contatos->total()}} (de  {{$contatos->firstItem()}} a    {{$contatos->lastItem()}})
            </div>
        </div>
    </div>

@endsection
