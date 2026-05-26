<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
    public $fillable = [
        'codigo',
        'nombre',
        'precio',
        'estado',
        'requiereautorizacion'
    ];
}
