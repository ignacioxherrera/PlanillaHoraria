<?php

namespace App\Mappers;

use App\Models\Aula;
use Carbon\Carbon;

class AulaMapper
{
    public static function toAula($aulaData)
    {
        return new Aula([
            'nro' => $aulaData->nro,
            'laboratorio' => $aulaData->laboratorio,
            'fecha_creacion' => Carbon::now(),
            'fecha_modificacion' => Carbon::now()
        ]);
    }

    public static function toAulaData($aula)
    {
        return [
            'nro' => $aula->nro,
            'laboratorio' =>$aula->laboratorio
        ];
    }

}
