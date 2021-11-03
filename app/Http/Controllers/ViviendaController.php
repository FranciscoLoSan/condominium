<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log\LogSistema;
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

        return view('admin.vivienda.index', ['vivienda' => $vivienda]);
    }




    public function create()
    {
        
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a registrar una vivienda a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return view('admin.vivienda.create');
    }




    public function store(Request $request)
    {
        $vivienda = AppVivienda::create($request->all());
        $log = new LogSistema();
        
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Se ha  registrado en el sistema la vivienda: '.$request->numero.' con domicilio: '.$request->domicilio.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return redirect()->route('admin.vivienda.index');
    }




    public function show($id)
    {
        $user = User::find(\Hashids::decode($id)[0]);

         $log = new LogSistema();
        
         $log->user_id = auth()->user()->id;
         $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a ver los datos del usuario: '.$user->display_name.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return view('admin.usuarios.show', ['user' => $user]);
    }




    public function edit($id)
    {
        $user = User::find(\Hashids::decode($id)[0]);

        $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha ingresado a editar los datos del usuario: '.$user->display_name.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();
        return view('admin.usuarios.edit', ['user' => $user]);
    }




    public function update(Request $request, $id)
    {
        $user = User::find(\Hashids::decode($id)[0]);
        
        $user->update($request->except('role'));

        if ($request->has('role'))
        {
            $user->syncRoles($request->role);
        }

         $log = new LogSistema();
        $log->user_id = auth()->user()->id;
        $log->tx_descripcion = 'El usuario: '.auth()->user()->display_name.' Ha modificó los datos del usuario: '.$user->display_name.' a las: '
        . date('H:m:i').' del día: '.date('d/m/Y');
        $log->save();

        return json_encode(['success' => true]);
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
