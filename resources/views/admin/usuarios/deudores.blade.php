@extends('layouts.admin')

@section('title', 'Deudores')
@section('page_title', 'Deudores')



@section('content')

   
      <div class="container">
      <br>
      
        <div class="col-md-12">
          <div class="card card-line-primary">
            <div class="card-header">
              <h5 >Listado de deudores</h5>
             
            </div>
             <!-- /.card-header -->
                <div class="card-body table-responsive">
                <table  class="display table table-striped " style="width:100%">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nombre completo</th>
                    <th>Usuario</th>
                    <th>Género</th>
                    <th>Correo electrónico</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr class="row{{ $user->id }}">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                      
                       @if ($user->genero == 'F')
                      <td><i class="mdi mdi-human-female fa-3x pink-text"></i></td>
                      @else
                      <td><i class="mdi mdi-human-male fa-3x blue-text "></i></td>
                      @endif


                    <td>{{ $user->email  }}</td>
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

