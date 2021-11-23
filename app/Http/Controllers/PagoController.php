<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Pago::all();
        
        return view('admin.pagos.index',['pagos'=>Pago::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        Pago::insert(['user_id'=>Auth::id(),'ticket'=>$ticket,'created_at'=>now(),'monto'=>$request->monto]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.pagos.show',['pago'=>Pago::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pagos.edit',['pago'=>Pago::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pago::findOrFail($id)->update(['estatus'=>$request->estatus]);
        return redirect()->route('pago.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
