<?php

namespace App\Mappers;

use App\Models\Comision;
use Carbon\Carbon;

class ComisionMapper
{
public static function toComision($comisionData)
    {
        return new Comision([
            'anio' => $comisionData->anio,
            'division' => $comisionData->division,
            'carrera' => $comisionData->carrera,
            'fecha_creacion' => Carbon::now(),
            'fecha_modificacion' => Carbon::now()
        ]);
    }


public static function toComisionData($comision)
    {
        return [
            'anio' => $comision->anio,
            'division' => $comision->division,
            'carrera' => $comision->carrera
        ];
    }
}
