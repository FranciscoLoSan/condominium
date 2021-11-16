<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Servicio extends Model
{
    protected $fillable = [
        'nombre','descripcion','costo','created_at','updated_at',
    ];
}
