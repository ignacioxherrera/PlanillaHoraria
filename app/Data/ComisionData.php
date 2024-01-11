<?php

namespace App\Data;

use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="ComisionData",
 *     title="ComisionData",
 *     description="Esquema del objeto ComisionData",
 *     @OA\Property(
 *          property="anio",
 *          type="integer",
 *          description="Año de la comision",
 *          example="2"
 *     ),
 *     @OA\Property(
 *          property="division",
 *          type="Integer",
 *          description="Division de la comision",
 *          example="3"
 *     ),
 *     @OA\Property(
 *          property="carrera",
 *          type="enum",
 *          description="Carrera de la comision",
 *          example="DS"
 *     )
 * )
 */
class ComisionData extends Data{

        public function __construct(
            public $anio,
            public $division,
            public $carrera
        ){}
}
