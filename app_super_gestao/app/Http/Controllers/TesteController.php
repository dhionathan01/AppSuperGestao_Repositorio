<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste( int $p1, int $p2){
        /* echo "Soma de {$p1} + {$p2} = ".($p1 + $p2); */
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //array associativo
        // No compact vc passa o nome das variáveis que vc quer e ele as redireciona para view
        //return view('site.teste', compact('p1', 'p2'));// compact
        return view('site.teste')->with('abc', $p1)->with('xyz', $p2);//with()
    }
}
