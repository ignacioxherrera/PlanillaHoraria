<?php

namespace App\Repositories;


interface UsuarioRepository
{
    public function obtenerTodosUsuarios();
    public function obtenerTodosAlumnos();
    public function obtenerUsuarioPorDni($dni);
    public function guardarUsuario($usuario);
    public function guardarAlumno($alumno);
    public function actualizarUsuario($request, $dni, $pass=false);
    public function actualizarContrasenia($request, $dni);
    public function eliminarUsuarioPorDni($dni);
}
