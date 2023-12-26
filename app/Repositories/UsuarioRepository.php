<?php

namespace App\Repositories;


interface UsuarioRepository
{
    public function obtenerTodosUsuarios();
    public function obtenerUsuarioPorDni($dni);
    public function guardarUsuario($alumno);
    public function actualizarUsuario($request, $dni, $pass=false);
    public function actualizarContrasenia($request, $dni);
    public function eliminarUsuarioPorDni($dni);
}
