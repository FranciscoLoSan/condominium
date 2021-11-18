<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'ticket','user_id','estatus'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
