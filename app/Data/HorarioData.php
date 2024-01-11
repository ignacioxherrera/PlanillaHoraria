<?php

namespace App\Data;

use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="HorarioData",
 *     title="HorarioData",
 *     description="Esquema del objeto HorarioData",
 *     @OA\Property(
 *     property="inicio",
 *     type="time",
 *     description="Hora de inicio de la clase",
 *     example="19:20:00"
 *    ),
 *     @OA\Property(
 *     property="fin",
 *     type="time",
 *     description="Hora de fin de la clase",
 *     example="20:40:00"
 *   ),
 *     @OA\Property(
 *     property="dia",
 *     type="enum",
 *     description="Dia de la clase",
 *     enum={"lunes", "martes", "miercoles", "jueves", "viernes"}
 *     )
 * )
 */
class HorarioData extends Data
{
    public function __construct(
        public $inicio,
        public $fin,
        public $dia
    ){

    }
}
