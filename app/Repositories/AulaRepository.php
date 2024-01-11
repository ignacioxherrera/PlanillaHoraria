<?php

namespace App\Repositories;

interface AulaRepository
{
    public function obtenerTodasAulas();
    public function obtenerTodosLaboratorios();
    public function obtenerAulaPorNro($nro);
    public function guardarAula($aula);
    public function actualizarAula($aula, $nro);
    public function eliminarAulaPorNro($nro);
}
