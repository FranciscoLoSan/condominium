@extends('layouts.admin')

@section('title', 'pagos')
@section('page_title', 'Pagos')



@section('content')
      <div class="container">
        <div class="col-md-6">
          <div class="btn-group">
           
           @can('Registrarpagos')
            <a href="{{ url('pagos/create') }}" class="btn blue darken-3 text-white "><i class="fa fa-plus-square"></i> Ingresar</a>  
           @endcan
          </div>
        </div>
      <br>
      
        <div class="col-md-12">
          <div class="card card-line-primary">
            <div class="card-header">
              <h5 >Listado de pagos</h5>
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
                      <a href="{{route('pago.index')}}" class="link_ruta">
                        Listado &nbsp; &nbsp;</i>
                      </a>
                    </li>
                  </ul><br>
                <table  class="display table table-striped " style="width:100%">
                    <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Monto</th>
                    <th>Foto</th>
                    <th>Estatus</th>
                    <td>Fecha</td>
                    <th>Opciones</th> 
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pagos as $pago)
                    <td>{{ $pago->user->name.' '.$pago->user->lastname }}</td>
                    <td>${{ number_format($pago->monto,2)}}</td>
                    <td><img src="{{asset('storage').'/'.$pago->ticket}}" style="width: 200px;"></td>
                    <td>
                      @switch($pago->estatus)
                          @case(0)
                              En espera
                              @break
                          @case(1)
                              Validado
                              @break
                          @case(2)
                              Rechazado
                              @break
                          @default
                              
                      @endswitch
                    </td>
                    <td>{{$pago->created_at}}</td>
                    <td>
                       <a class="btn btn-round blue darken-4" href="{{ route('pago.show', [$pago->id]) }}"><i class="mdi mdi-face text-center" style="color: white;"></i> </a>
                       <a class="btn btn-round blue darken-4" href="{{ route('pago.edit', [$pago->id]) }}"><i class="mdi mdi-pencil text-center" style="color: white;"></i> </a>
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

