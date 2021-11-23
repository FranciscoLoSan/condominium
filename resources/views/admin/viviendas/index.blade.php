@extends('layouts.admin')

@section('title', 'Viviendas')
@section('page_title', 'Viviendas')



@section('content')

   
      <div class="container">
        <div class="col-md-6">
          <div class="btn-group">
           
           @can('RegistrarVivienda')
            <a href="{{ url('vivienda/create') }}" class="btn blue darken-3 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>  
           @endcan
          </div>
        </div>
      <br>
      
        <div class="col-md-12">
          <div class="card card-line-primary">
            <div class="card-header">
              <h5 >Listado de viviendas</h5>
             
            </div>
             <!-- /.card-header -->
                <div class="card-body table-responsive">
                     <ul class="list-inline">
                   <li class="list-inline-item">
                      <a href="/" class="link_ruta">
                        Inicio &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/vivienda" class="link_ruta">
                        Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/vivienda/create" class="link_ruta">
                        Nuevo
                      </a>
                    </li>
                  </ul><br>
                <table  class="display table table-striped " style="width:100%">
                    <thead>
                    <tr>
                    <th>Inquilino</th>
                    <th>Numero</th>
                    <th>Domicilio</th>
                    <th>Descripcion</th>
                    <th>Opciones</th> 
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vivienda as $viviendaData)
                    <td>@foreach ($user as $userData)
                        @if($userData->id == $viviendaData->user_id)
                          {{$userData->name}} {{$userData->lastname}}
                        @endif
                    @endforeach</td>
                    <td>{{ $viviendaData->numero }}</td>
                    <td>{{ $viviendaData->domicilio}}</td>
                    <td>{{ $viviendaData->descripcion }}</td>
                    <td>
                       @can('VerVivienda')
                       <a class="btn btn-round blue darken-4" href="{{ url('vivienda', [$viviendaData->encode_id]) }}"><i class="mdi mdi-face text-center" style="color: white;"></i> </a>
                       @endcan
                      @can('EditarVivienda')
                       <a class="btn btn-round blue darken-4" href="{{ url('vivienda', [$viviendaData->encode_id,'edit']) }}"><i class="mdi mdi-pencil text-center" style="color: white;"></i> </a>
                     @endcan
                    </td>
                    </tr>
                    @endforeach
                    </tr>
                    </tbody>                
                </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
      </div>
      
   



@endsection

