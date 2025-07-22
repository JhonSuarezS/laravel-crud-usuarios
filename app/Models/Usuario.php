<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios'; // Asegura que apunta a la tabla correcta

    protected $fillable = ['nombre', 'email']; // Campos que se pueden asignar en masa
}
