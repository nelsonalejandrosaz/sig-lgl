<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoVenta extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
