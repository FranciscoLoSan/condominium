<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth',])->group(function () {

  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('logins', 'LoginController');
  Route::resource('user',   'UserController');
  Route::resource('permission', 'PermissionController');
  Route::get('logs', 'HomeController@logs')->name('logs');
  Route::resource('roles',   'RolesController');
  Route::resource('vivienda', 'ViviendaController');
  Route::resource('servicio', 'ServicioController');

  Route::resource('pago', 'PagoController');

  Route::get('deudores', 'UserController@getDeudores');
  
});
