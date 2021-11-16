@extends('layouts.admin')

@section('title', 'Servicios')
@section('page_title', 'Servicio')
@section('page_subtitle', 'Datos')

@section('content')

<div class="container">
<section class="content card card-line-primary">

   
    <div class="card-body">
  <div class="row invoice-info">
    <div class="col-sm-3 invoice-col">
      <strong>nombre</strong><br>
        {{ $servicio->nombre }}
    </div>
    <div class="col-sm-3 invoice-col">
      <strong>Descripcion</strong>
      <br>
      {{ $servicio->descripcion }}
    </div>

    <div class="col-sm-3 invoice-col">
      <strong>Costo</strong>
      <br>
      {{ $servicio->costo }}
    </div>
    
  <br>
  <br>
  <div class="row">
    <div class="col-md-6">
      <div class="btn-group">
        @can('EditarUsuario')
        <a href="{{ url('servicio', [$servicio->encode_id, 'edit']) }}" class="btn blue darken-4 text-white"><i class="fa fa-edit"></i> Editar</a>
        @endcan
      </div>
    </div>
  </div>
    </div>

</section>
</div>
@endsection
