<?php

namespace App\Data;
use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="DocenteData",
 *     title="DocenteData",
 *     description="Esquema del objeto DocenteData",
 *     @OA\Property(
 *          property="dni",
 *          type="string",
 *          description="DNI del docente",
 *          example="12345678"
 *     ),
 *     @OA\Property(
 *          property="nombre",
 *          type="string",
 *          description="Nombre del docente",
 *          example="Juan"
 *     ),
 *     @OA\Property(
 *          property="apellido",
 *          type="string",
 *          description="Apellido del docente",
 *          example="Perez"
 *     ),
 *     @OA\Property(
 *          property="email",
 *          type="string",
 *          description="Email del docente",
 *          example="juanPerez@gmail.com"
 *    ),
 *     @OA\Property(
 *     property="contrasenia",
 *     type="string",
 *     description="Contraseña del docente",
 *     example="12345678"
 *  )
 * )
 */
class DocenteData extends Data
{
    public function __construct(
        public $dni,
        public $nombre,
        public $apellido,
        public $email,
        public $contrasenia,
        public $tipo
    )
    {
    }
}
