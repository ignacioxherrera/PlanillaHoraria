<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Usuario",
 *     title="Usuario",
 *     description="Esquema del objeto Usuario",
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
 *     ),
 *     @OA\Property(
 *     property="fecha_creacion",
 *     type="datetime",
 *     description="Fecha de creacion del usuario"
 * ),
 *     @OA\Property(
 *     property="fecha_modificacion",
 *     type="datetime",
 *     description="Fecha de modificacion del usuario"
 * )
 * )
 */
class Usuario extends Model
{
    use HasFactory;

    protected $table = 'Usuarios';

    protected $primaryKey = 'dni';
    public $incrementing = false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['dni', 'nombre', 'apellido', 'email', 'contrasenia', 'tipo', 'fecha_creacion', 'fecha_modificacion'];

    protected $hidden = ['contrasenia'];

}
