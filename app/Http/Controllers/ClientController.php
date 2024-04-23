<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function inicio()
    {
        // Aqui mandara la pagina de inicio del cliente
        return view ('client.house');
    }
}