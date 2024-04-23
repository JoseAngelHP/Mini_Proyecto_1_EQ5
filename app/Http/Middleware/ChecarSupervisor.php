<?php

namespace App\Http\Middleware;

use Clousure;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ChecarSupervisor
{
    /**
     * 
     * @param  \Illuminate\Http\Request $request
     * @param   \Closure $next
     * @return mixed
     */

     public function handle($request, Closure $next)
     {
        //Aqui verificamos si el usuario se encuentra autenticado
        if (Auth::check()) {
            $usuario = Auth::usuario();
            //Aqui verificamos si el usuario tiene el rol del supervisor
            if ($usuario->rol === 'Supervisor') {
                //Aqui checamos que el usuario tiene el rol de supervisor, el cual permite el acceso
                return $next($request);
            }
        }

        //En dado caso de que el usuario no este autenticado o no sea un supervisor, enviaremos un mensaje de error
        throw new AccessDeniedHttpException('Acceso no permitido. Debes de ser un Supervisor para poder acceder.');
     }
}