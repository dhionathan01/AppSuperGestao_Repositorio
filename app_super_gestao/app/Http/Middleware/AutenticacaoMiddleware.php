<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao." - ".$perfil."<br>";
        if($metodo_autenticacao == 'padrao'){
            echo "Verificar se o usuário e senha existe não banco de dados"."<br>";
        }
        if($metodo_autenticacao == 'ldap'){
            echo "Verificar se o usuário e senha no grupo AD"."<br>";
        }
        if($perfil == 'visitante'){
            echo "Exibir apenas alguns recursos <BR>";
        }else{
            echo "Exibir todos recursos <BR>";
        }
        // verifica se o usuário possui acesso a rota
        if(false){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação!!!');
        }
    }
}
