@if (isset($produto_detalhe->id))
    <form action="{{route('produto.update', ['produto' => $produto_detalhe->id])}}" method="post">
    @csrf
    @method('PUT');
@else
    <form action="{{route('produto-detalhe.store')}}" method="post">
    @csrf
@endif
        <input type="text" name="produto_id" id="ProdutoId" placeholder="ID do produto" value="{{$produto_detalhe->produto_id ?? old('produto_id')}}" class="borda-preta">
        {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}

        <input type="text" name="comprimento" id="Comprimento" placeholder="Comprimento" value="{{$produto_detalhe->comprimento ?? old('comprimento')}}" class="borda-preta">
        {{$errors->has('comprimento') ? $errors->first('comprimento') : ''}}

        <input type="text" name="largura"   id="Largura" placeholder="Largura do produto" value="{{$produto_detalhe->largura ?? old('largura')}}" class="borda-preta">
        {{$errors->has('largura') ? $errors->first('largura') : ''}}

        <input type="text" name="altura"   id="Altura" placeholder="Altura do produto" value="{{$produto_detalhe->altura ?? old('altura')}}" class="borda-preta">
        {{$errors->has('altura') ? $errors->first('altura') : ''}}

        <select name="unidade_id" id="Unidade_Id">
            <option value=""> -- Selecione a unidade de Medida --</option>
            @foreach ($unidades as $unidade)
                <option {{($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : NULL}} value="{{$unidade->id}}">{{$unidade->descricao}}</option>
            @endforeach
        </select>
        {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}
        <button type="submit" class="borda-preta">{{isset($produto_detalhe->id) ? 'Atualizar' : 'Cadastrar'}}</button>
    </form>
