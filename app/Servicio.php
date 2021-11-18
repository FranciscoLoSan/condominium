<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'nombre', 'descripcion', 'costo','vivienda_id'
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

    public function getEncodeIDAttribute()
    {
        return Hashids::encode($this->id);
    }
}
