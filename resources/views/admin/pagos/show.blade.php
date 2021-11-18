@extends('layouts.admin')

@section('title', 'pagos')
@section('page_title', 'pagos')
@section('page_subtitle', 'pagos')

@section('content')

<div class="container">
<section class="content card card-line-primary">

   
    <div class="card-body">
      
      <div class="card-body">
        <div class="form-group">
        </div>

      <div class="form-group pading">
        <label class="font-weight-bolder" for="numero">Nombre</label>
        <input class="form-control" style="font-size: 15px;" id="nombre" name="nombre" value="{{$pago->user->name.' '.$pago->user->lastname}}" disabled>
        <span class="missing_alert text-danger" id="numero_alert"></span>
      </div>


      <div class="form-group">
        <label class="font-weight-bolder" for="estatus" >Estatus</label>
        <select class="form-control" id="estatus" name="estatus" disabled>
          @switch($pago->estatus)
              @case(0)
                  <option value="0" selected>En espera</option>
                  <option value="1">Validado</option>
                  <option value="2">Rechazado</option>
                  
                  @break
              @case(1)
                  <option value="0">En espera</option>
                  <option value="1" selected>Validado</option>
                  <option value="2">Rechazado</option>
                  
                  @break
              @case(2)
                  <option value="0">En espera</option>
                  <option value="1">Validado</option>
                  <option value="2" selected>Rechazado</option>
                  
                  @break
              @default
                  
          @endswitch
        </select>
      </div>

      <img class="mb-5" src="{{asset('storage').'/'.$pago->ticket}}" style="width: 100%;">

  <div class="row">
    <div class="col-md-6">
      <div class="btn-group">
        @can('EditarUsuario')
        <a href="{{ url('pago', [$pago->id, 'edit']) }}" class="btn blue darken-4 text-white"><i class="fa fa-edit"></i> Editar</a>
        @endcan
      </div>
    </div>
  </div>
    </div>

</section>
</div>
@endsection
