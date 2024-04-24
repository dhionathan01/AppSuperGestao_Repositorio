@extends('app.layouts.basico')
@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            @if (isset($produto->id))
                <p>Produto - Editar</p>
            @else
                <p>Produto - Adicionar</p>
            @endif
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                @if (isset($produto->id))
                    <form action="{{route('produto.update', ['produto' => $produto->id])}}" method="post">
                    @csrf
                    @method('PUT');
                @else
                    <form action="{{route('produto.store')}}" method="post">
                    @csrf
                @endif
                    <input type="text" name="nome" id="Nome" placeholder="Nome" value="{{$produto->nome ?? old('nome')}}" class="borda-preta">
                    {{$errors->has('nome') ? $errors->first('nome') : ''}}
                    <input type="text" name="descricao" id="Descricao" placeholder="Descrição" value="{{$produto->descricao ?? old('descricao')}}" class="borda-preta">
                    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}
                    <input type="text" name="peso"   id="Peso" placeholder="Peso" value="{{$produto->peso ?? old('peso')}}" class="borda-preta">
                    {{$errors->has('peso') ? $errors->first('peso') : ''}}
                    <select name="unidade_id" id="Unidade_Id">
                        <option value=""> -- Selecione a unidade de Medida --</option>
                        @foreach ($unidades as $unidade)
                        <option {{($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : NULL}} value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                        @endforeach
                    </select>
                    {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
                    <button type="submit" class="borda-preta">{{isset($produto->id) ? 'Atualizar' : 'Cadastrar'}}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
