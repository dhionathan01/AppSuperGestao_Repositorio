<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        var_dump($_GET);
        $titulo = 'Contato (Controller Definição)';
        return view('site.contato', compact('titulo'));
    }
}
