<?php

namespace App\Data;

use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="AulaData",
 *     title="AulaData",
 *     description="Esquema del objeto AulaData",
 *     @OA\Property(
 *     property="nombre",
 *     type="string",
 *     description="Nombre del aula"
 * ),
 *     @OA\Property(
 *     property="laboratorio",
 *     type="boolean",
 *     description="Laboratorio del aula"
 * ),
 * )
 */
class AulaData extends Data
{
    public function __construct(
        public $nombre,
        public $laboratorio
    ){

    }
}
