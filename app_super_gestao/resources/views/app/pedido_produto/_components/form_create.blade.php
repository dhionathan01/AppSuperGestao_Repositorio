    <form action="{{route('pedido-produto.store', ['pedido' => $pedido])}}" method="post">
    @csrf
    <select name="produto_id" id="Produto_Id">
        <option value=""> -- Selecione um cliente --</option>
        @foreach ($produtos as $produto)
            <option {{ old('produto_id') == $produto->id ? 'selected' : NULL}} value="{{$produto->id}}">{{$produto->nome}}</option>
        @endforeach
    </select>
        {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}
        <input type="number" name="quantidade" value="{{old('quantidade') ? old('quantidade') : ''}}" placeholder="Quantidade" class="borda-preta">
        {{$errors->has('quantidade') ? $errors->first('quantidade') : ''}}
        <button type="submit" class="borda-preta">Cadastrar</button>
    </form>
