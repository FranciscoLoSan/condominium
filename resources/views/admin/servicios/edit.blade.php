@extends('layouts.admin')

@section('title', 'Servicios')
@section('page_title', 'Servicio')
@section('page_subtitle', 'Editar')
@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          @can('VerServicio')
          <a href="{{ url('servicio') }}" class="btn blue darken-4 text-white "><i class="mdi mdi-sort-alphabetical-ascending"></i> Listado</a>
          @endcan
          @can('RegistrarServicio')
          <a href="{{ url('servicio/create') }}" class="btn blue darken-4 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>
          @endcan
          <a href="{{ url('servicio', [$servicio->encode_id]) }}" class="btn blue darken-4 text-white "><i class="fa fa-eye"></i> Datos</a>
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
            <input type="hidden" id="_url" value="{{ url('user',[$user->encode_id]) }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}">   
            <div class="box-body"> --}}
              <form action="{{ url('/servicio/'.$servicio->encode_id) }}" method="POST" role="form" id="main-form">
                {{method_field('PUT')}}
                @csrf
              <div class="card-body">
                <div class="form-group">
                 <!-- <select class="form-control" id="vivienda_id" name="vivienda_id">
                   {{-- @foreach ($vivienda as $viviendaData)
                      @if ($servicio->vivienda_id == $viviendaData->id)
                      <option value="{{ $viviendaData->id }}">{{ $viviendaData->numero}} {{$viviendaData->domicilio}}</option>
                    @else
                    <option value="{{ $viviendaData->id }}">{{ $viviendaData->numero}} {{$viviendaData->domicilio}}</option>                
                    @endif
                    @endforeach--}}
                    </select>
                </div>-->
  
                <div class="form-group pading">
                  <label class="font-weight-bolder" for="numero">Nombre</label>
                  <input class="form-control" style="font-size: 15px;" id="nombre" name="nombre" value="Nombre">
                  <span class="missing_alert text-danger" id="numero_alert"></span>
                </div>
                <div class="form-group">
                  <label class="font-weight-bolder" for="domicilio">Descripcion</label>
                  <input class="form-control" style="font-size: 15px;" id="descripcion" name="descripcion" value="Descripcion">
                  <span class="missing_alert text-danger" id="last_name_alert"></span>
                </div>
              
                <div class="form-group pading">
                  <label class="font-weight-bolder" for="descripcion">Costo</label>
                  <input class="form-control" style="font-size: 15px;" id="costo" name="costo" value="Costo">
                  <span class="missing_alert text-danger" id="last_name_alert"></span>
                </div>
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
