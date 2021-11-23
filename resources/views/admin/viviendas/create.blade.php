@extends('layouts.admin')

@section('title', 'Viviendas')
@section('page_title', 'Vivienda')
@section('page_subtitle', 'Ingresar')
@section('content')

  <section class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          @can('VerVivienda')
          <a href="{{ url('vivienda') }}" class="btn blue darken-4 text-white "><i class="mdi mdi-sort-alphabetical-ascending"></i> Listado</a>
          @endcan
          @can('RegistrarVivienda')
          <a href="{{ url('vivienda/create') }}" class="btn blue darken-4 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>
          @endcan
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-line-primary">
          <div class="card-header  ">
              <h5 >Crear Vivienda</h5>
             
            </div>
          <div class="card-body">
            <ul class="list-inline">
               <li class="list-inline-item">
                  <a href="/" class="link_ruta">
                    Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                </li>
               <li class="list-inline-item">
                  <a href="/viviendas" class="link_ruta">
                    Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                </li>
               <li class="list-inline-item">
                  
                    Nueva vivienda
                 </li>
             </ul><br>
          
         {{--}} <form role="form" id="main-form" autocomplete="off">
            <input type="hidden" id="_url" value="{{ url('vivienda') }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}"> --}}
            <form action="{{ url('/vivienda/') }}" method="POST" role="form" id="main-form">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Asignar inquilino</label>
                <select class="form-control" id="user_id" name="user_id">
                  
                  @foreach ($user as $userData)
                  @if( $userData->hasRole('Inquilino'))
                            <option value="{{ $userData->id }}">{{ $userData->name}} {{$userData->lastname}}</option> 
                @endif
                @endforeach
                </select>
              </div>
              
              <div class="form-group pading">
                <label class="font-weight-bolder" for="numero">Numero</label>
                <input class="form-control" style="font-size: 15px;" id="numero" name="numero" placeholder="Numero">
                <span class="missing_alert text-danger" id="numero_alert"></span>
              </div>
              <div class="form-group">
                <label class="font-weight-bolder" for="domicilio">Domicilio</label>
                <input class="form-control" style="font-size: 15px;" id="domicilio" name="domicilio" placeholder="Domicilio">
                <span class="missing_alert text-danger" id="last_name_alert"></span>
              </div>
            
              <div class="form-group pading">
                <label class="font-weight-bolder" for="descripcion">Descripcion</label>
                <input class="form-control" style="font-size: 15px;" id="descripcion" name="descripcion" placeholder="Descripcion">
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
