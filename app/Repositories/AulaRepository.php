<?php

namespace App\Repositories;

interface AulaRepository
{
    public function obtenerTodasAulas();
    public function obtenerAulaPorId($id);
    public function guardarAula($aula);
    public function eliminarAulaPorId($id);
}
