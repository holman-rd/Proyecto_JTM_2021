<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'StartController@index');
//Route::get('/', 'EstudianteController@index');

//Rutas para indicar el controlador
Route::resource('almacen/estudiante','EstudianteController');
Route::resource('almacen/empresa','EmpresaController');
Route::resource('almacen/contacto','ContactenosController');

Route::resource('almacen/dispositivo','DispositivoController');
Route::resource('almacen/trabajo','TrabajoController');

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/estadotrabajo','EstadoTrabajoController');
Route::resource('almacen/cliente','ClienteController');
Route::resource('almacen/Factura','FacturaController');

Route::resource('usuario','UsuarioController');

Route::auth();

Route::get('/home', 'HomeController@index');

