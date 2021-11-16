<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log\LogSistema;
use App\Vivienda as AppVivienda;
use App\Servicio as AppServicio;
class ServicioController extends Controller
{
    public function index(Request $request)
    {
        $log = new LogSistema();

        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver los servicios a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();


        $servicio = AppServicio::get();

        return view('admin.servicios.index', ['servicio' => $servicio]);
    }




    public function create()
    {
        
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_desc;
        
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a registrar un servicio a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();
        $vivienda = AppVivienda::get();

        return view('admin.servicios.create', ['vivienda' => $vivienda]);
    }

    public function store(Request $request)
    {
        $servicio = AppServicio::create($request->all());
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El servicio: '.$servicio->nombre.' Se ha  registrado en el sistema '.'a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return redirect()->route('servicio.index');
    }




    public function show($id)
    {
        $servicio = AppServicio::find(\Hashids::decode($id)[0]);
        
         $log = new LogSistema();
        
         $log->user_id = auth()->user()->id;
         $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver los datos del servicio: '.$servicio->nombre.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();
        
        return view('admin.servicios.show', ['servicio' => $servicio]);
    }




    public function edit($id)
    {
        $servicio = AppServicio::find(\Hashids::decode($id)[0]);

        $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a editar los datos del servicio: '.$servicio->nombre.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $vivienda = AppVivienda::get();
        return view('admin.servicios.edit', ['vivienda' => $vivienda], ['servicio' => $servicio]);
    }




    public function update(Request $request, $id)
    {
        $servicio = AppServicio::findOrFail(\Hashids::decode($id)[0]);
        $servicio->fill($request->all());
        $servicio->save();
        
        $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' modificó los datos del servicio: '.$servicio->nonbre.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return redirect()->route('servicio.index');
        
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
