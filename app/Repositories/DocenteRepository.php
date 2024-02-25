<?php

namespace App\Repositories;

interface DocenteRepository
{
    public function obtenerTodosDocentes();
    public function obtenerDocentePorDni($dni);
    public function guardarDocente($docente);
    public function actualizarDocente($request, $dni);
    public function eliminarDocentePorDni($dni);

}
