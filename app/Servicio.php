<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Servicio extends Model
{
<<<<<<< HEAD
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
=======
    protected $fillable = [
        'nombre','descripcion','costo','created_at','updated_at',
    ];
>>>>>>> 484a92ca68f74cc58496104d99321a888fee4ff2
}
