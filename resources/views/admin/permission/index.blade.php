@extends('layouts.admin')

@section('title', 'Permisos')
@section('page_title', 'Permisos')


@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card card-line-primary">
            <div class="card-header">
                <h5 class="font-weight-bold">Permisos del rol {{ $name }}</h5>
                <div class="card-tools"></div>
              </div>
              <div class="card-body">
               <form role="form" id="main-form">
                <input type="hidden" id="_url" value="{{ url('permission', [$name]) }}">
                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                 <table class="table table-responsive table-striped">            
                    <tr>
                      <td>
                        Ver usuarios<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerUsuario" {{ $role->hasPermissionTo('VerUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Agregar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarUsuario" {{ $role->hasPermissionTo('RegistrarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarUsuario" {{ $role->hasPermissionTo('EditarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarUsuario" {{ $role->hasPermissionTo('EliminarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Roles<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerRole" {{ $role->hasPermissionTo('VerRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Agregar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarRole" {{ $role->hasPermissionTo('RegistrarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Editar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarRole" {{ $role->hasPermissionTo('EditarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarRole" {{ $role->hasPermissionTo('EliminarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>                  
                       <td>
                        Crear Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="CrearPermisos" {{ $role->hasPermissionTo('CrearPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarPermisos" {{ $role->hasPermissionTo('EditarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                 
                     <td>
                        Eliminar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarPermisos" {{ $role->hasPermissionTo('EliminarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td> 
                      <td>
                        Ver historial de log-in</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerLogins" {{ $role->hasPermissionTo('VerLogins') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>          
                    </tr>
                     <tr>                        
                     <td>
                        Log del sistema</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerLogSistema" {{ $role->hasPermissionTo('VerLogSistema') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver Vivienda<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerVivienda" {{ $role->hasPermissionTo('VerVivienda') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Agregar Vivienda</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarVivienda" {{ $role->hasPermissionTo('RegistrarVivienda') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Vivienda</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarVivienda" {{ $role->hasPermissionTo('EditarVivienda') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Vivienda</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarVivienda" {{ $role->hasPermissionTo('EliminarVivienda') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Servicios<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerServicio" {{ $role->hasPermissionTo('VerServicio') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                   </tr>  
                   <tr>
                    
                    <td>
                      Agregar Servicio</br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="RegistrarServicio" {{ $role->hasPermissionTo('RegistrarServicio') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                    <td>
                      Editar Servicio<br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="EditarServicio" {{ $role->hasPermissionTo('EditarServicio') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                    <td>
                      Eliminar Servicio</br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="EliminarServicio" {{ $role->hasPermissionTo('EliminarServicio') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                    <td>
                      Ver Pago</br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="VerPago" {{ $role->hasPermissionTo('VerPago') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                    <td>
                      Registrar Pago</br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="RegistrarPago" {{ $role->hasPermissionTo('RegistrarPago') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                     <td>
                      Editar Pago<br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="EditarPago" {{ $role->hasPermissionTo('EditarPago') ? 'checked' : '' }}>
                        </label>
                      </div>
                    </td>
                   </tr>
                   <tr>
                    <td>
                      Eliminar Pago<br>
                      <div class="checkbox icheck">
                        <label>
                          <input type="checkbox" name="permissions[]" value="EliminarPago" {{ $role->hasPermissionTo('EliminarPago') ? 'checked' : '' }}>
                        </label>
                      </div>
                   </tr>
                  </table>
                 <!-- <div class="form-group pading">
                     <label for="name">Contraseña actual</label>
                     <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Contraseña actual">
                     <span class="missing_alert text-danger" id="current_password_alert"></span>
                    </div>
                    <button type="submit" class="btn blue darken-4 text-white ajax" id="submit">
                      <i id="ajax-icon" class="fa fa-edit"></i> Editar
                    </button> -->
              </form>
            </div>
          </div>
        </div>  
      </div>
    </div>


@endsection

@push('scripts')
 <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
 </script>
  <script src="{{ asset('js/admin/permission/index.js') }}"></script>
@endpush
