<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Vivienda extends Model
{
    protected $table = 'viviendas';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
<<<<<<< HEAD
        'id', 'numero', 'domicilio', 'descripcion', 'user_id', 
=======
        'numero', 'domicilio', 'decripcion', 'latitud', 'longitud', 'user_id', 'servicio_id'
>>>>>>> origin/rama_esteban
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

    public function getEncodeIDAttribute()
    {
        return Hashids::encode($this->id);
    }
}
