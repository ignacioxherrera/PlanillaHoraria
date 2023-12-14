<?php



namespace App\Data;

use Dflydev\DotAccessData\Data;


/**
 * @OA\Schema(
 *     schema="AlumnoData",
 *     title="AlumnoData",
 *     description="Esquema del objeto AlumnoData",
 *     @OA\Property(
 *     property="dni",
 *     type="string",
 *     description="DNI del alumno"
 * ),
 *     @OA\Property(
 *     property="nombre",
 *     type="string",
 *     description="Nombre del alumno"
 * ),
 *     @OA\Property(
 *     property="apellido",
 *     type="string",
 *     description="Apellido del alumno"
 * ),
 *     @OA\Property(
 *     property="email",
 *     type="string",
 *     description="Email del alumno"
 * ),
 *     @OA\Property(
 *     property="contrasenia",
 *     type="string",
 *     description="Contraseña del alumno"
 * )
 * )
 */
class AlumnoData extends Data {

    public function __construct(
        public $dni,
        public $nombre,
        public $apellido,
        public $email,
        public $contrasenia
    ){

    }

}
