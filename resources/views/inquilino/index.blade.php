@extends('layouts.admin')
@section('title', 'Inicio')
@section('content')
{{-- HOLA COMO ESTAMOS --}}
<section class="container">
    <div class="col-sm-12">

        <?php $total = 0 ?>
        
        @if ($pago)
            @switch($pago->estatus)
                @case(0)
                    <div id="alerta" class="alert alert-warning">
                        <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-user-clock"></i>En espera de respuesta</h5>
                        La respuesta del pago será atendida a la brevedad.
                    </div>
                    @break

                @case(1)
                    <div id="alerta" class="alert alert-success">
                        <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>Pago Validado</h5>
                        El pago de los servicios del condominio ha sido registrado.
                    </div>
                    @break

                @case(2)
                    <div id="alerta" class="alert alert-danger">
                        <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-skull-crossbones"></i>Pago Inválido</h5>
                        El ticket de pago ha sido rechazado.
                    </div>
                    @break
            @endswitch
        @endif

        <div class="card ">
            <div class="card-header">
                <h1>Recibo</h1> 
            </div>

            <div class="card-body">
                @if ($vivienda)
                    <h2>Información de la Vivienda</h2>
                    <form class="row g-3">
                        <div class="col-md-6">
                        <label class="form-label">Número</label>
                        <input type="text" class="form-control" value="{{$vivienda->numero}}" disabled>
                        </div>
                        <div class="col-md-6  mb-3">
                        <label class="form-label">Domicilio</label>
                        <input type="text" class="form-control" value="{{$vivienda->domicilio}}" disabled>
                        </div>
                        <div class="col-12">
                        <label class="form-label">Descripción</label>
                        <input type="text" class="form-control" value="{{$vivienda->descripcion}}" disabled>
                        </div>
                    </form>
                    <br>
                @endif

                <hr>

                <h2>Recibo a pagar del mes en curso</h2>
                @if ($pago)
                    @if ($pago->estatus==1)
                        <h5>El pago ya se ha realizado.</h5>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Servicio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Costo Por Vivienda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicios as $servicio)
                            <tr>
                                <td>{{$servicio->nombre}}</td>
                                <td>{{$servicio->descripcion}}</td>
                    
                                <td>${{$costo = number_format(($servicio->costo)/$numInquilinos,2)}}</td>
                    
                    
                                <?php
                                    $total+=($servicio->costo)/$numInquilinos;
                                ?>
                            </tr>
                            @endforeach
                    
                            <tr>
                                <td></td>
                                <td></td>
                                <td>${{ number_format($total,2)}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Costo Por Vivienda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicios as $servicio)
                        <tr>
                            <td>{{$servicio->nombre}}</td>
                            <td>{{$servicio->descripcion}}</td>
                
                            <td>${{$costo = number_format(($servicio->costo)/$numInquilinos,2)}}</td>
                
                
                            <?php
                                $total+=($servicio->costo)/$numInquilinos;
                            ?>
                        </tr>
                        @endforeach
                
                        <tr>
                            <td></td>
                            <td></td>
                            <td>${{ number_format($total,2)}}</td>
                        </tr>
                    </tbody>
                </table>
                @endif
                
                <hr>
                <h2>Foto del Ticket</h2>
                @if ($pago)
                    @if ($pago->estatus==0)
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <div>
                                <i class="icon fas fa-exclamation-triangle"></i>Ya se ha enviado una foto. En caso de subir otra se eliminará la anterior.
                            </div>
                        </div>
                    @endif
                @endif
                @include('inquilino.partials.formTicket')
            </div>
       </div>
   </div>
</section>
@endsection

@push('scripts')
    <script>
        var myAlert = document.getElementById('btn-alert')
        myAlert.addEventListener('click', function () {
            console.log('hola')
            document.getElementById('alerta').style.display = 'none';
        });
    </script>
@endpush