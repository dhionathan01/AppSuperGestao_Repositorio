<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
class ContatoController extends Controller
{
    public function contato(Request $request){

        $contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();
        // invés do save usar o metodo created
       /*  $contato->create($request->all());

        print_r($contato->getAttributes());*/
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo'));
    }

    public function salvar(Request $request){
        // Realizar a validação dos dados do formulário recebido no request
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);
        SiteContato::create($request->all());
    }
}
