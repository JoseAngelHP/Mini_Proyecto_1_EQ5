<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargController extends Controllers
{
    public function inicio()
    {
        // Aqui mandara la pagina de inicio del encargado
        return view('encarg.home');
    }
}