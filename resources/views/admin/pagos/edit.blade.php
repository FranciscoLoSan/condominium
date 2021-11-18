@extends('layouts.admin')

@section('title', 'Pagos')
@section('page_title', 'Pagos')
@section('page_subtitle', 'Pagos')
@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          <a href="{{ url('pago') }}" class="btn blue darken-4 text-white "><i class="mdi mdi-sort-alphabetical-ascending"></i> Listado</a>
          <a href="{{ url('pago', [$pago->id]) }}" class="btn blue darken-4 text-white "><i class="fa fa-eye"></i> Datos</a>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-line-primary">
           <div class="card-header  ">
              <h5 >Editar Usuario</h5>
             
            </div>
          <div class="card-body">
           {{-- <form role="form" id="main-form" autocomplete="off">
            <input type="hidden" id="_url" value="{{ url('user',[$user->id]) }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}">   
            <div class="box-body"> --}}
              <form action="{{ url('/pago/'.$pago->id) }}" method="POST" role="form" id="main-form">
                {{method_field('PUT')}}
                @csrf
              <div class="card-body">
                <div class="form-group">
                </div>
  
              <div class="form-group pading">
                <label class="font-weight-bolder" for="numero">Nombre</label>
                <input class="form-control" style="font-size: 15px;" id="nombre" name="nombre" value="{{$pago->user->name.' '.$pago->user->lastname}}" disabled>
                <span class="missing_alert text-danger" id="numero_alert"></span>
              </div>

              <div class="form-group pading">
                <label class="font-weight-bolder" for="numero">Monto</label>
                <input class="form-control" style="font-size: 15px;" id="nombre" name="nombre" value="{{$pago->monto}}" disabled>
                <span class="missing_alert text-danger" id="numero_alert"></span>
              </div>


              <div class="form-group">
                <label class="font-weight-bolder" for="estatus">Estatus</label>
                <select class="form-control" id="estatus" name="estatus">
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

              <div class="box-footer">
              <button type="submit" class="btn blue darken-4 text-white  ajax" id="submit">
                <i id="ajax-icon" class="fa fa-edit"></i> Editar
              </button>
            </div>
          </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
