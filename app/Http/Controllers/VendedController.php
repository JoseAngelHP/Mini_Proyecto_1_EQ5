<?php

namespace Illuminate\Http\Controllers;

use Illuminate\Http\Request;

class VendedController extends Controller
{
    public function inicio()
    {
        // Aqui mandara la pagina de inicio del vendedor
        return view('vended.home');
    }
}