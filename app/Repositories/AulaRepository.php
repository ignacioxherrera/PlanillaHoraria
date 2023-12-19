<?php

namespace App\Repositories;

interface AulaRepository
{
    public function obtenerTodasAulas();
    public function obtenerAulaPorId($nro);
    public function guardarAula($aula);
    public function eliminarAulaPorId($nro);
}
