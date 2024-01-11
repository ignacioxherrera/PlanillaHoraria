<?php

namespace App\Repositories;


interface ComisionRepository
{
    public function obtenerTodasComisiones();
    public function obtenerTodasComisionesPorCarrera($carrera);
    public function obtenerComisionPorId($id);
    public function guardarComision($comisionData);
    public function actualizarComision($request, $id);
    public function eliminarComisionPorId($id);
}
