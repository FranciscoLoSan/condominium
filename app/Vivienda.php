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
        'id', 'numero', 'interior', 'domicilio', 'descripcion', 'user_id', 
    ];

    protected $hidden = [];

    protected $appends = ['full_name'];

    public function getEncodeIDAttribute()
    {
        return Hashids::encode($this->id);
    }
}
