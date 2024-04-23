<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('email','password');

        if (Auth::attempt($credenciales)){
            //Aqui checamos que las credenciales sean validas, si lo es quiere decir que el usuario a iniciado sesion
            //Envia a la pagina de inicio correspondiente del rol que tenga el usuario
            return $this->redirectTo();
        } else {
            // Aqui checamos si las credenciales son invalidas , guarda un mensaje de error en la sesion
            Session::flash('error_message', 'Credenciales Invalidas');
            return back();
        }
    }
    protected function redirectTo()
    {
        $usuario = Auth::usuario();
        //Aqui indica el nombre del rol del usuario con minusculas
        $usuarioRole = strtolower($usuario->rol);
        
        if ($usuariRole === 'encarg') {
            return redirect(route('encarg.home'));
        } elseif ($usuarioRole === 'client') {
            return redirect(route('client.home'));
        } elseif ($usuarioRole === 'contad') {
            return redirect(route('contad.home'));
        } elseif ($usuarioRole === 'supervi') {
            return redirect(route('supervi.home'));
        } elseif ($usuarioRole === 'vended') {
            return redirect(route('vended.home'));
        } else {
            return redirect(route('login'));
        }
    }
    public function logout(Request $request)
    {
        //
    }
}