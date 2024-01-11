<?php

namespace App\Repositories;

interface HorarioRepository
{
    public function obtenerTodosHorarios();
    public function obtenerHorarioPorId($id);
    public function guardarHorario($horario);
    public function actualizarHorario($horario, $id);
    public function eliminarHorarioPorId($id);

}
