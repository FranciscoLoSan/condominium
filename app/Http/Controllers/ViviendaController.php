<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log\LogSistema;
use App\Models\User;
use App\Vivienda as AppVivienda;

class ViviendaController extends Controller
{
    public function index(Request $request)
    {
        $log = new LogSistema();

        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver las viviendas a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();


        $vivienda = AppVivienda::get();
        $user = User::get();

        return view('admin.viviendas.index', ['vivienda' => $vivienda], ['user' => $user]);
    }




    public function create()
    {
        
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a registrar una vivienda a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();
        $user = User::get();
        $vivienda = AppVivienda::get();
        

        return view('admin.viviendas.create', ['vivienda' => $vivienda], ['user' => $user]);
    }




    public function store(Request $request)
    {
        $vivienda = AppVivienda::create($request->all());
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'La vivienda: '.$vivienda->numero.' '.$vivienda->domicilio.' Se ha  registrado en el sistema la vivienda: '.$vivienda->id.' con domicilio: '.$vivienda->numero.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return redirect()->route('vivienda.index');
    }




    public function show($id)
    {
        $vivienda = AppVivienda::find(\Hashids::decode($id)[0]);

         $log = new LogSistema();
        
         $log->user_id = auth()->user()->id;
         $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver los datos de la vivienda: '.$vivienda->id.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return view('admin.viviendas.show', ['vivienda' => $vivienda]);
    }




    public function edit($id)
    {
        $vivienda = AppVivienda::find(\Hashids::decode($id)[0]);

        $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a editar los datos de la vivienda: '.$vivienda->id.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $user = User::get();
        return view('admin.viviendas.edit', ['vivienda' => $vivienda], ['user' => $user]);
    }




    public function update(Request $request, $id)
    {
        $vivienda = AppVivienda::findOrFail(\Hashids::decode($id)[0]);
        $vivienda->fill($request->all());
        $vivienda->save();
        
         $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha modificó los datos de la vivienda: '.$vivienda->id.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return redirect()->route('vivienda.index');
        
    }




    public function destroy($id)
    {
        $user = User::find(\Hashids::decode($id)[0])->delete();

        return json_encode(['success' => true]);
    }



    public function autocomplete(Request $request)
    {
        return User::search($request->q)->take(10)->get();
    }
}
