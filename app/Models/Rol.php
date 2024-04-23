<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    const ENCARGADO = 'Encargado';
    const CLIENTE = 'Cliente';
    const CONTADOR = 'Contador';
    const SUPERVISOR = 'Supervisor';
    const VENDEDOR = 'Vendedor';
}