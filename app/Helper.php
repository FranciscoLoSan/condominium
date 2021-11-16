<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class Helper
{
    static function getCountInquilinos(){
        $sql = 'SELECT count(*) inquilinos FROM users us
                INNER JOIN model_has_roles mhr
                on us.id = mhr.model_id
                WHERE role_id = 2';
        $count = DB::select($sql);
        
        if(count($count))
            return $count[0]->inquilinos;
        return 0;
    }

    static function getInquilinos(){
        $sql = 'SELECT count(*) total 
                FROM viviendas
                WHERE user_id IS NOT NULL';
        $count = DB::select($sql);
        return $count[0]->total;
    }
}
