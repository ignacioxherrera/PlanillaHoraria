<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/saludos', function () {
    return view('app');
});

// Usuarios
Route::get('/api/usuarios', 'App\Http\Controllers\UsuarioController@index');
Route::get('/api/usuarios/{dni}', 'App\Http\Controllers\UsuarioController@show');
Route::post('/api/usuarios/guardar', 'App\Http\Controllers\UsuarioController@store');
Route::put('/api/usuarios/actualizar/{dni}', 'App\Http\Controllers\UsuarioController@update');
Route::put('/api/usuarios/actualizar/datos/{dni}', 'App\Http\Controllers\UsuarioController@updateDatos');
Route::put('/api/usuarios/actualizar/password/{dni}', 'App\Http\Controllers\UsuarioController@updatePassword');
Route::delete('/api/usuarios/eliminar/{dni}', 'App\Http\Controllers\UsuarioController@destroy');

// Aulas
Route::get('/api/aulas', 'App\Http\Controllers\AulaController@index');
Route::get('/api/aulas/{nro}', 'App\Http\Controllers\AulaController@obtenerAulaPorId');
Route::post('/api/aulas/guardar', 'App\Http\Controllers\AulaController@guardarAula');
Route::delete('/api/aulas/eliminar/{nro}', 'App\Http\Controllers\AulaController@eliminarAulaPorId');

