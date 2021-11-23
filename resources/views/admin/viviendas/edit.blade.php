@extends('layouts.admin')

@section('title', 'Viviendas')
@section('page_title', 'Vivienda')
@section('page_subtitle', 'Editar')
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
          <a href="{{ url('vivienda', [$vivienda->encode_id]) }}" class="btn blue darken-4 text-white "><i class="fa fa-eye"></i> Datos</a>
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
              <form action="{{ url('/vivienda/'.$vivienda->encode_id) }}" method="POST" role="form" id="main-form">
                {{method_field('PUT')}}
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Asignar inquilino</label>
                  <select class="form-control" id="user_id" name="user_id">
                  @foreach ($user as $userData)
                  @if( $userData->hasRole('Inquilino'))
                    @if ($vivienda->user_id == $userData->id)
                    <option value="{{ $userData->id }}" selected>{{ $userData->name }} {{ $userData->lastname }}</option>
                    @else
                    <option value="{{ $userData->id }}" selected>{{ $userData->name }} {{ $userData->lastname }}</option>                  
                    @endif
                  @endif
                  @endforeach
                  </select>
                </div>
  
                <div class="form-group pading">
                  <label class="font-weight-bolder" for="numero">Numero</label>
                  <input class="form-control" style="font-size: 15px;" id="numero" name="numero" value="{{ $vivienda->numero}}">
                  <span class="missing_alert text-danger" id="numero_alert"></span>
                </div>
                <div class="form-group">
                  <label class="font-weight-bolder" for="domicilio">Domicilio</label>
                  <input class="form-control" style="font-size: 15px;" id="domicilio" name="domicilio" value="{{$vivienda->domicilio}}">
                  <span class="missing_alert text-danger" id="last_name_alert"></span>
                </div>
              
                <div class="form-group pading">
                  <label class="font-weight-bolder" for="descripcion">Descripcion</label>
                  <input class="form-control" style="font-size: 15px;" id="descripcion" name="descripcion" value="{{$vivienda->descripcion}}">
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
