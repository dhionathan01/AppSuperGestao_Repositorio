<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //dd($request);
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo'));
    }
}
