<?php

namespace App\Data;

/**
 * @OA\Schema(
 *     schema="MateriaData",
 *     title="MateriaData",
 *     description="Esquema del objeto MateriaData",
 *     @OA\Property(
 *     property="nombre",
 *     type="string",
 *     description="Nombre de la materia",
 *     example="Matematicas"
 *    )
 * )
 */
class MateriaData
{
    public function __construct(
        public $nombre
    ){

    }
}
