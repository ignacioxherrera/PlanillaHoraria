<?php

namespace App\Data;

use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="AulaData",
 *     title="AulaData",
 *     description="Esquema del objeto AulaData",
 *     @OA\Property(
 *          property="nro",
 *          type="integer",
 *          description="Número del aula"
 *     ),
 *     @OA\Property(
 *          property="laboratorio",
 *          type="boolean",
 *          description="Laboratorio del aula"
 *     ),
 * )
 */
class AulaData extends Data
{
    public function __construct(
        public $nro,
        public $laboratorio
    ){

    }
}
