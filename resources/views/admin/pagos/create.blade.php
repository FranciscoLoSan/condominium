@extends('layouts.admin')

@section('title', 'Servicios')
@section('page_title', 'Servicios')
@section('page_subtitle', 'Registrar')
@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          @can('VerVivienda')
          <a href="{{ url('servicion') }}" class="btn blue darken-4 text-white "><i class="mdi mdi-sort-alphabetical-ascending"></i> Listado</a>
          @endcan
          @can('RegistrarVivienda')
          <a href="{{ url('servicio/create') }}" class="btn blue darken-4 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>
          @endcan
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-line-primary">
          <div class="card-header  ">
              <h5 >Crear Servicio</h5>
             
            </div>
          <div class="card-body">
            <ul class="list-inline">
               <li class="list-inline-item">
                  <a href="/" class="link_ruta">
                    Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                </li>
               <li class="list-inline-item">
                  <a href="/user" class="link_ruta">
                    Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                </li>
               <li class="list-inline-item">
                  
                    Nuevo servicio
                 </li>
             </ul><br>
          
         {{--}} <form role="form" id="main-form" autocomplete="off">
            <input type="hidden" id="_url" value="{{ url('vivienda') }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}"> --}}
            <form action="{{ url('/servicio/') }}" method="POST" role="form" id="main-form">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Asignar vivienda</label>
                <select class="form-control" id="vivienda_id" name="vivienda_id">
                @foreach ($vivienda as $viviendaData)
                  <option value="{{ $viviendaData->id }}">{{ $viviendaData->numero}} {{$viviendaData->domicilio}}</option>
                @endforeach
                </select>
              </div>

              <div class="form-group pading">
                <label class="font-weight-bolder" for="numero">Nombre</label>
                <input class="form-control" style="font-size: 15px;" id="nombre" name="nombre" placeholder="Nombre">
                <span class="missing_alert text-danger" id="numero_alert"></span>
              </div>
              <div class="form-group">
                <label class="font-weight-bolder" for="domicilio">Descripcion</label>
                <input class="form-control" style="font-size: 15px;" id="descripcion" name="descripcion" placeholder="Descripcion">
                <span class="missing_alert text-danger" id="last_name_alert"></span>
              </div>
            
              <div class="form-group pading">
                <label class="font-weight-bolder" for="descripcion">Costo</label>
                <input class="form-control" style="font-size: 15px;" id="costo" name="costo" placeholder="Costo">
                <span class="missing_alert text-danger" id="last_name_alert"></span>
              </div>
              
              <div class="">
                <button type="submit" class="btn blue darken-4 text-white  ajax" id="submit">
                  <i id="ajax-icon" class="fa fa-save"></i> Ingresar
                </button>
               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

{{-- @push('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script src="{{ asset('js/admin/user/create.js') }}"></script>
@endpush --}}
