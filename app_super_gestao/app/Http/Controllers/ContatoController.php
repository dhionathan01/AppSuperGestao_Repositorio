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
        $contato->create($request->all());

        print_r($contato->getAttributes());
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo'));
    }
}
