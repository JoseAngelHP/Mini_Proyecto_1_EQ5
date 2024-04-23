<?php

namespace Illuminate\Http\Controllers;

use Illuminate\Http\Request;

class SuperviController extends Controller
{
    public function inicio()
    {
        // Aqui mandara la pagina de inicio del supervisor
        return view('supervi.house');
    }
}