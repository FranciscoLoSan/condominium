<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Servicio extends Model
{
    protected $table = 'viviendas';
    protected $primaryKey = 'numero';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'numero', 'domicilio', 'descripcion', 'latitud', 'longitud', 'user_id', 'servicio_id'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

    public function getEncodeIDAttribute()
    {
        return Hashids::encode($this->numero);
    }
}
