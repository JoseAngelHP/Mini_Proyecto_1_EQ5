<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    public function run()
    {
        //Aqui se asignan los nombres de los roles
        Rol::create(['nombre' => Rol::ENCARGADO, 'descripcion' => 'Rol Del Encargado']);
        Rol::create(['nombre' => Rol::CLIENTE, 'descripcion' => 'Rol Del Cliente']);
        Rol::create(['nombre' => Rol::CONTADOR, 'descripcion' => 'Rol Del Contador']);
        Rol::create(['nombre' => Rol::SUPERVISOR, 'descripcion' => 'Rol Del Supervisor']);
        Rol::create(['nombre' => Rol::VENDEDOR, 'descripcion' => 'Rol Del Vendedor']);
    }
}
