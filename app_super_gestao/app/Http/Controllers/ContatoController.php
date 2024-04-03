<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;
class ContatoController extends Controller
{
    public function contato(Request $request){
        $motivo_contatos = MotivoContato::all();
        $contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();
        // invés do save usar o metodo created
       /*  $contato->create($request->all());

        print_r($contato->getAttributes());*/
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo','motivo_contatos'));
    }

    public function salvar(Request $request){
        // Realizar a validação dos dados do formulário recebido no request
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos', // nomes com no mínimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
