<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        // Aqui creamos a nuestros usuarios
        $supervisor = User::create([
            'name' => 'Jose Angel',
            'email' => 'Supervisor1@gmail.com',
            'password' => bcrypt('Supervisor1@gmail.com'),
            'rol' => Rol::SUPERVISOR,
        ]);

        $encargado = User::create([
            'name' => 'Carlos Cesar',
            'email' => 'Encargado1@gmail.com',
            'password' => bcrypt('Encargado1@gmail.com'),
            'rol' => Rol::ENCARGADO,
        ]);

        $cliente = User::create([
            'name' => 'Yuridia de los Angeles',
            'email' => 'Cliente1@gmail.com',
            'password' => bcrypt('Cliente1@gmail.com'),
            'rol' => Rol::CLIENTE,
        ]);

        $contador = User::create([
            'name' => 'John Kramer',
            'email' => 'Contador1@gmail.com',
            'password' => bcrypt('Contador1@gmail.com'),
            'rol' => Rol::CONTADOR,
        ]);

        $vendedor = User::create([
            'name' => 'Leonel Messi',
            'email' => 'Vendedor1@gmail.com',
            'password' => bcrypt('Vendedor1@gmail.com'),
            'rol' => Rol::VENDEDOR,
        ]);
    }
}

