<?php

namespace App\Mappers;

use App\Models\Materia;
use Carbon\Carbon;

class MateriaMapper
{
    public static function toMateria($materia)
    {
        return new Materia([
            'nombre' => $materia->nombre,
            'fecha_creacion' => Carbon::now(),
            'fecha_modificacion' => Carbon::now()
        ]);
    }

    public static function toMateriaData($materia)
    {
        return [
            'nombre' => $materia->nombre
        ];
    }
}
