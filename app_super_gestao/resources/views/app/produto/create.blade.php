@extends('app.layouts.basico')
@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="" method="post">
                    @csrf
                    <input type="text" name="nome" id="Nome" placeholder="Nome" value="" class="borda-preta">
                    <input type="text" name="descricao" id="Descricao" placeholder="Descrição" value="" class="borda-preta">
                    <input type="text" name="peso"   id="Peso" placeholder="Peso" value="" class="borda-preta">
                    <select name="unidade_id" id="Unidade_Id">
                        <option value=""> -- Selecione a unidade de Medida --</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{$unidade->id}}">{{$unidade->descricao}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
