<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadController extends Controllers
{
    public function inicio()
    {
         // Aqui mandara la pagina de inicio del contador
        return view('contad.house');
    }
}