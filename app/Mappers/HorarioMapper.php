<?php

namespace App\Mappers;

use App\Models\Horario;
use Carbon\Carbon;

class HorarioMapper
{
    public static function toHorario($horarioData)
    {
        return new Horario([
            'inicio' => $horarioData->inicio,
            'fin' => $horarioData->fin,
            'dia' => $horarioData->dia,
            'fecha_creacion' => Carbon::now(),
            'fecha_modificacion' => Carbon::now()
        ]);
    }

    public static function toHorarioData($horario)
    {
        return [
            'inicio' => $horario->inicio,
            'fin' => $horario->fin,
            'dia' => $horario->dia
        ];
    }

}
