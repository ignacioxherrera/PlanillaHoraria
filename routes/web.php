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


// Usuarios
Route::get('/api/usuarios', 'App\Http\Controllers\UsuarioController@index');
Route::get('/api/usuarios/{dni}', 'App\Http\Controllers\UsuarioController@show');
Route::post('/api/usuarios/guardar', 'App\Http\Controllers\UsuarioController@store');
Route::put('/api/usuarios/actualizar/{dni}', 'App\Http\Controllers\UsuarioController@update');
Route::put('/api/usuarios/actualizar/datos/{dni}', 'App\Http\Controllers\UsuarioController@updateDatos');
Route::put('/api/usuarios/actualizar/password/{dni}', 'App\Http\Controllers\UsuarioController@updatePassword');
Route::delete('/api/usuarios/eliminar/{dni}', 'App\Http\Controllers\UsuarioController@destroy');

    // Alumnos
Route::get('/api/usuarios/alumnos2', 'App\Http\Controllers\UsuarioController@index2');
    Route::get('/api/usuarios/alumnos', 'App\Http\Controllers\AlumnoController@index');
    Route::get('/api/usuarios/alumnos/{dni}', 'App\Http\Controllers\AlumnoController@show');
    Route::post('/api/usuarios/guardar/alumno', 'App\Http\Controllers\AlumnoController@store');
    Route::put('/api/usuarios/actualizar/alumno/{dni}', 'App\Http\Controllers\AlumnoController@update');
    Route::delete('/api/usuarios/eliminar/alumno/{dni}', 'App\Http\Controllers\AlumnoController@destroy');

    // Docentes
    Route::get('/api/usuarios/docentes', 'App\Http\Controllers\DocenteController@index');
    Route::get('/api/usuarios/docentes/{dni}', 'App\Http\Controllers\DocenteController@show');
    Route::post('/api/usuarios/guardar/docente', 'App\Http\Controllers\DocenteController@store');
    Route::put('/api/usuarios/actualizar/docente/{dni}', 'App\Http\Controllers\DocenteController@update');
    Route::delete('/api/usuarios/eliminar/docente/{dni}', 'App\Http\Controllers\DocenteController@destroy');



// Aulas
Route::get('/api/aulas', 'App\Http\Controllers\AulaController@index');
Route::get('/api/aulas/laboratorios', 'App\Http\Controllers\AulaController@obtenerLaboratorios');
Route::get('/api/aulas/{nro}', 'App\Http\Controllers\AulaController@show');
Route::post('/api/aulas/guardar', 'App\Http\Controllers\AulaController@store');
Route::put('/api/aulas/actualizar/{nro}', 'App\Http\Controllers\AulaController@update');
Route::delete('/api/aulas/eliminar/{nro}', 'App\Http\Controllers\AulaController@destroy');

// Comisiones
Route::get('/api/comisiones', 'App\Http\Controllers\ComisionController@index');
Route::get('/api/comisiones/carreras/{carrera}', 'App\Http\Controllers\ComisionController@verComisionesPorCarrera');
Route::get('/api/comisiones/{id}', 'App\Http\Controllers\ComisionController@show');
Route::post('/api/comisiones/guardar', 'App\Http\Controllers\ComisionController@store');
Route::put('/api/comisiones/actualizar/{id}', 'App\Http\Controllers\ComisionController@update');
Route::delete('/api/comisiones/eliminar/{id}', 'App\Http\Controllers\ComisionController@destroy');

// Horarios
Route::get('/api/horarios', 'App\Http\Controllers\HorarioController@index');
Route::get('/api/horarios/{id}', 'App\Http\Controllers\HorarioController@show');
Route::post('/api/horarios/guardar', 'App\Http\Controllers\HorarioController@store');
Route::put('/api/horarios/actualizar/{id}', 'App\Http\Controllers\HorarioController@update');
Route::delete('/api/horarios/eliminar/{id}', 'App\Http\Controllers\HorarioController@destroy');

// Materias
Route::get('/api/materias', 'App\Http\Controllers\MateriaController@index');
Route::get('/api/materias/{id}', 'App\Http\Controllers\MateriaController@show');
Route::get('/api/materias/nombre/{nombre}', 'App\Http\Controllers\MateriaController@verMateriaPorNombre');
Route::post('/api/materias/guardar', 'App\Http\Controllers\MateriaController@store');
Route::put('/api/materias/actualizar/{id}', 'App\Http\Controllers\MateriaController@update');
Route::delete('/api/materias/eliminar/{id}', 'App\Http\Controllers\MateriaController@destroy');

