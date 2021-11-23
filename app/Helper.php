<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Pago;
use App\Servicio;


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

    static function getEfectivoIngresado(){
        $fecha = now()->toDateString();
        $year = substr($fecha,0,4);
        $mes = substr($fecha,5,2);

        
        if($mes == 1){
            $mes = 12;
            $year--;
        } else {
            $mes--;
        }
        
        $sumaEfectivo = Pago::whereYear('created_at',$year)->whereMonth('created_at',$mes)->where('estatus',1)->get()->sum('monto');

        return $sumaEfectivo;
    }

    static function getServicioTotal(){
        $fecha = now()->toDateString();
        $year = substr($fecha,0,4);
        $mes = substr($fecha,5,2);
        
        $sumaEfectivo = Servicio::whereYear('created_at',$year)->whereMonth('created_at',$mes)->get()->sum('costo');
        return $sumaEfectivo;
    }


    static function getDeudores(){

        $fecha = now()->toDateString();
        $year = substr($fecha,0,4);
        $mes = substr($fecha,5,2);

        
        if($mes == 1){
            $mes = 12;
            $year--;
        } else {
            $mes--;
        }

        $sql = 'SELECT COUNT(*) deudores 
                FROM users us
                INNER JOIN viviendas vi
                ON us.id = vi.user_id
                WHERE us.id NOT IN (SELECT user_id FROM pagos WHERE pagos.estatus = 1 AND MONTH(pagos.created_at) = :mes AND YEAR(pagos.created_at) = :year)';

        $deudores = DB::select($sql,['mes'=>$mes,'year'=>$year]);

        return $deudores[0]->deudores;
    }
    // static function getServicioTotal(){
    //     $fecha = now()->toDateString();
    //     $year = substr($fecha,0,4);
    //     $mes = substr($fecha,5,2);
        
    //     $sumaEfectivo = Servicio::whereYear('created_at',$year)->whereMonth('created_at',$mes)->get()->sum('costo');
    //     return $sumaEfectivo;
    // }
}
