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
