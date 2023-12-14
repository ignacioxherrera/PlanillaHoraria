<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Alumno",
 *     title="Alumno",
 *     description="Esquema del objeto Alumno",
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
class Alumno extends Model
{
    use HasFactory;
    protected $table = 'Alumnos';

    protected $primaryKey = 'dni';
    public $incrementing = false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['dni', 'nombre', 'apellido', 'email', 'contrasenia', 'fecha_creacion', 'fecha_modificacion'];

    protected $hidden = ['contrasenia'];

}
