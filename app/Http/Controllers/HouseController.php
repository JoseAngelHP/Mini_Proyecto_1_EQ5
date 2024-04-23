<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controllers
{
    /**
     * 
     * Creacion de instancia para controlador
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 
     * Uso de la aplicacion del dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function inicio()
    {
        return view('house');
    }
}