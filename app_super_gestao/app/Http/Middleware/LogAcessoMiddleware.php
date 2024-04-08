<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
use Symfony\Component\HttpFoundation\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //request -> manipular
/*         return $next($request);
 */        //response - manipular
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log'=> "{$ip} requisitou a rota {$rota}"]);
        return Response('Chegamos no middleware e finalizamos no próprio middleware');
    }
}
