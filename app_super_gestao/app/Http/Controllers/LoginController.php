<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){
        echo "Entrei aqui";
        $erro = '';
        if($request->get('erro') == '1'){
            $erro = "Usuário e senha não existe";
        }
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }
    public function autenticar(Request $request){
       // Regras de validação
       $regras = [
        'usuario' => 'email',
        'senha' => 'required'
       ];

       // Mensagens de feedback de validação
       $feedback =[
        'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
       ];
       $request->validate($regras, $feedback);
       $email = $request->get('usuario');
       $password = $request->get('senha');
       echo "Usuário: $email <BR>";
       echo "Senha: $password <BR>";
       //iniciar o Model User
       $user = new User();
       $usuario = $user->where('email', $email)
                    ->where('password', $password)
                    ->get()
                    ->first();
       if(isset($usuario->name)){
            echo "Usuário existe";
       } else{
            return redirect()->route('site.login', ['erro'=> 1]);
       }
       echo '<pre>';
       print_r($usuario);
       echo '</pre>';

    }
}
