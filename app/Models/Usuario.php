<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $fillable = [
        'nombre',
        'correo',
        'clave'
    ];

    protected $hidden = [
        'clave'
    ];

    public $timestamps = true;
}
