<?php

namespace App\Repositories;

interface AlumnoRepository
{
    public function obtenerTodosAlumnos();
    public function obtenerAlumnoPorDni($dni);
    public function guardarAlumno($alumno);
    public function actualizarAlumno($request, $dni);
    public function eliminarAlumnoPorDni($dni);
}
