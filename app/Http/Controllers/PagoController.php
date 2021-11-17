<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use Illuminate\Support\Facades\Auth;

class PagoController extends Controller
{
    public function store(Request $request)
    {
        $campos = [
            'ticket'=>'required|mimes:jpeg,png,jpg',
        ];


        $fecha = now()->toDateString();
        $year = substr($fecha,0,4);
        $mes = substr($fecha,5,2);

        $pago = Pago::whereYear('created_at',$year)->whereMonth('created_at',$mes)->where('user_id',Auth::id())->first();


        if($request->hasFile('ticket')){
            $ticket=$request->file('ticket')->store('uploads','public');
        } else {
            $ticket="";
        }

        if($pago){
            $pago->delete();
        }

        Pago::insert(['user_id'=>Auth::id(),'ticket'=>$ticket,'created_at'=>now()]);

        return redirect('/');
    }
}
