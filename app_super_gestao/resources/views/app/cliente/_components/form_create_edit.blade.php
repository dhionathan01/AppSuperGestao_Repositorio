@if (isset($cliente->id))
    <form action="{{route('cliente.update', ['cliente' => $cliente->id])}}" method="post">
    @csrf
    @method('PUT')
@else
    <form action="{{route('cliente.store')}}" method="post">
    @csrf
@endif

        <input type="text" name="nome" id="Nome" placeholder="Nome" value="{{$cliente->nome ?? old('nome')}}" class="borda-preta">
        {{$errors->has('nome') ? $errors->first('nome') : ''}}
        <button type="submit" class="borda-preta">{{isset($cliente->id) ? 'Atualizar' : 'Cadastrar'}}</button>
    </form>
