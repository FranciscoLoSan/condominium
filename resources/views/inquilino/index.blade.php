@extends('layouts.admin')
@section('title', 'Inicio')
@section('content')
{{-- HOLA COMO ESTAMOS --}}
<section class="container">
    <div class="col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h1>Recibo</h1>
            </div>
            <div class="card-body">
                <h2>Recibo a pagar del mes en curso</h2>
                
                <div id="alerta" class="alert alert-success">
                <button id="btn-alert" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Error</h5>
                    La información ingresada contiene errores
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Servicio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Costo Por Vivienda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($total=0)
                            @foreach ($servicios as $servicio)
                            <tr>
                                <td>{{$servicio->nombre}}</td>
                                <td>{{$servicio->descripcion}}</td>
                                <td>${{$costo = number_format(($servicio->costo)/$numInquilinos,2)}}</td>
                                <?php
                                    $total += $costo;
                                ?>
                            </tr>
                            @endforeach

                            <tr>
                                <td></td>
                                <td></td>
                                <td>${{number_format($total,2)}}</td>
                            </tr>
                        </tbody>
                      </table>
                </div>

                <form role="form" id="main-form" autocomplete="off" method="POST" action="{{route('pago.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen del ticket</label>
                        <input class="form-control" name="ticket" type="file" id="formFile">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
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