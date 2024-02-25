<?php

namespace App\Data;
use Dflydev\DotAccessData\Data;

/**
 * @OA\Schema(
 *     schema="AlumnoData",
 *     title="AlumnoData",
 *     description="Esquema del objeto AlumnoData",
 *     @OA\Property(
 *          property="dni",
 *          type="string",
 *          description="DNI del alumno",
 *          example="12345678"
 *     ),
 *     @OA\Property(
 *          property="nombre",
 *          type="string",
 *          description="Nombre del alumno",
 *          example="Juan"
 *     ),
 *     @OA\Property(
 *          property="apellido",
 *          type="string",
 *          description="Apellido del alumno",
 *          example="Perez"
 *     ),
 *     @OA\Property(
 *          property="email",
 *          type="string",
 *          description="Email del alumno",
 *          example="juanPerez@gmail.com"
 *     ),
 *     @OA\Property(
 *          property="contrasenia",
 *          type="string",
 *          description="Contraseña del alumno",
 *          example="12345678"
 *     ),
 *     @OA\Property(
 *     property="comision_id",
 *     type="integer",
 *     description="Id de la comision a la que pertenece el alumno",
 *     example="1"
 *   )
 * )
 */
class AlumnoData extends Data
{
    public function __construct(
        public $dni,
        public $nombre,
        public $apellido,
        public $email,
        public $contrasenia,
        public $tipo,
        public $comision_id
    )
    {

    }

}

