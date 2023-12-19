<?php

namespace App\Mappers;

use App\Models\Aula;
use App\Data\AulaData;
use Carbon\Carbon;

class AulaMapper
{
    public static function toAula(AulaData $aulaData)
    {
        return new Aula([
            'nro' => $aulaData->nro,
            'laboratorio' => $aulaData->laboratorio,
            'fecha_creacion' => Carbon::now(),
            'fecha_modificacion' => Carbon::now()
        ]);
    }

    public static function toAulaData(Aula $aula)
    {
        return new AulaData(
            $aula->nro,
            $aula->laboratorio
        );
    }

}
