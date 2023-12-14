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

// Alumnos
Route::get('/api/alumnos', 'App\Http\Controllers\AlumnoController@index');
Route::get('/api/alumnos/{dni}', 'App\Http\Controllers\AlumnoController@obtenerAlumnoPorDni');
Route::post('/api/alumnos/guardar', 'App\Http\Controllers\AlumnoController@guardarAlumno');
Route::delete('/api/alumnos/eliminar/{dni}', 'App\Http\Controllers\AlumnoController@eliminarAlumnoPorDni');

// Aulas
Route::get('/api/aulas', 'App\Http\Controllers\AulaController@index');
Route::get('/api/aulas/{id}', 'App\Http\Controllers\AulaController@obtenerAulaPorId');
Route::post('/api/aulas/guardar', 'App\Http\Controllers\AulaController@guardarAula');
Route::delete('/api/aulas/eliminar/{id}', 'App\Http\Controllers\AulaController@eliminarAulaPorId');

