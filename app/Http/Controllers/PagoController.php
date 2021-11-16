<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function store(Request $request)
    {
        $campos = [
            'ticket'=>'required|mimes:jpeg,png,jpg',
        ];

        if($request->hasFile('ticket')){
            $ticket=$request->file('ticket')->store('uploads','public');
        } else {
            $ticket="";
        }

        Pago::insert(['user_id'=>Auth::id(),'estatus'=>3,'ticket'=>$ticket,'created_at'=>now()]);

        return redirect('/');
    }
}
