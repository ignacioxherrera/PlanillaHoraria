<?php



namespace App\Data;

use Dflydev\DotAccessData\Data;


/**
 * @OA\Schema(
 *     schema="UsuarioData",
 *     title="UsuarioData",
 *     description="Esquema del objeto UsuarioData",
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
 * ),
 *     @OA\Property(
 *     property="tipo",
 *     type="enum",
 *     description="Tipo de usuario",
 *     enum={"alumno", "docente", "admin"}
 *     )
 * )
 */
class UsuarioData extends Data {

    public function __construct(
        public $dni,
        public $nombre,
        public $apellido,
        public $email,
        public $contrasenia,
        public $tipo
    ){

    }

}
