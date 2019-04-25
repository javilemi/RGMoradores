<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('usuarios', 'usuarioController');

Route::resource('personas', 'PersonaController');

Route::resource('gentes', 'GenteController');

Route::resource('productos', 'ProductoController');

Route::resource('clientes', 'ClienteController');

Route::resource('proveedors', 'ProveedorController');

Route::resource('proveedores', 'ProveedoresController');

Route::resource('almacens', 'AlmacenController');

Route::resource('almacenes', 'AlmacenesController');

Route::resource('moradores', 'MoradoresController');

Route::resource('domingos', 'domingoController');

Route::resource('sabados', 'sabadoController');

Route::resource('nandas', 'nandaController');