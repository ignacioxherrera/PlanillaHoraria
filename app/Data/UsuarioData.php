<?php



namespace App\Data;

use Dflydev\DotAccessData\Data;


/**
 * @OA\Schema(
 *     schema="UsuarioData",
 *     title="UsuarioData",
 *     description="Esquema del objeto UsuarioData",
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
 *          property="tipo",
 *          type="enum",
 *          description="Tipo de usuario",
 *          enum={"alumno", "docente", "admin", "visitante"},
 *          example="alumno"
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
