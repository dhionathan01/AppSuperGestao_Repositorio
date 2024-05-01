<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $nome = ucwords($_SESSION['nome']);
        return view('app.home', ['nome' => $nome]);
    }
}
