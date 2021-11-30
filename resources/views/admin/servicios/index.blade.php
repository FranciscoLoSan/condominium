@extends('layouts.admin')

@section('title', 'Servicios')
@section('page_title', 'Servicios')



@section('content')

   
      <div class="container">
        <div class="col-md-6">
          <div class="btn-group">
           
           @can('RegistrarServicio')
            <a href="{{ url('servicio/create') }}" class="btn blue darken-3 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>  
           @endcan
          </div>
        </div>
      <br>
      
        <div class="col-md-12">
          <div class="card card-line-primary">
            <div class="card-header">
              <h5 >Listado de servicios</h5>
             
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
                      <a href="/servicio" class="link_ruta">
                        Listado &nbsp; &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="list-inline-item">
                      <a href="/servicio/create" class="link_ruta">
                        Nuevo
                      </a>
                    </li>
                  </ul><br>
                <table  class="display table table-striped " style="width:100%">
                    <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Costo</th>
                    <td>Fecha</td>
                    <th>Opciones</th> 
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($servicio as $servicioData)
                    <td>{{ $servicioData->nombre }}</td>
                    <td>{{ $servicioData->descripcion}}</td>
                    <td>{{ $servicioData->costo }}</td>
                    <td> {{ $servicioData->created_at }}</td>
                    <td>
                       @can('VerServicio')
                       <a class="btn btn-round blue darken-4" href="{{ url('servicio', [$servicioData->encode_id]) }}"><i class="mdi mdi-face text-center" style="color: white;"></i> </a>
                       @endcan
                      @can('EditarServicio')
                       <a class="btn btn-round blue darken-4" href="{{ url('servicio', [$servicioData->encode_id,'edit']) }}"><i class="mdi mdi-pencil text-center" style="color: white;"></i> </a>
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

