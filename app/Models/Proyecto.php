<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'estado',
        'responsable',
        'monto',
        'created_by'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'created_by');
    }

    public $timestamps = true;
}
