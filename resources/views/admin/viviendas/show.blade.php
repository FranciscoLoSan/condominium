@extends('layouts.admin')

@section('title', 'Viviendas')
@section('page_title', 'Vivienda')
@section('page_subtitle', 'Datos')

@section('content')

<div class="container">
<section class="content card card-line-primary">

   
    <div class="card-body">
  <div class="row invoice-info">
    <div class="col-sm-3 invoice-col">
      <strong>Número</strong><br>
        {{ $vivienda->numero }}
    </div>
    <div class="col-sm-3 invoice-col">
      <strong>Domicilio</strong>
      <br>
      {{ $vivienda->domicilio }}
    </div>
    <div class="col-sm-3 invoice-col">
      <strong>Descripcion</strong>
      <br>
      {{ $vivienda->descripcion }}
    </div>
    
  <br>
  <br>
  <div class="row">
    <div class="col-md-6">
      <div class="btn-group">
        @can('EditarUsuario')
        <a href="{{ url('vivienda', [$vivienda->encode_id, 'edit']) }}" class="btn blue darken-4 text-white"><i class="fa fa-edit"></i> Editar</a>
        @endcan
      </div>
    </div>
  </div>
    </div>

</section>
</div>
@endsection
