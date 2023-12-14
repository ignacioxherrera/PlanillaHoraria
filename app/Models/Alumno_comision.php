<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Alumno_comision",
 *     title="Alumno_comision",
 *     description="Esquema del objeto Alumno_comision",
 *     @OA\Property(
 *     property="id",
 *     type="integer",
 *     description="ID del alumno_comision"
 *    ),
 *     @OA\Property(
 *     property="id_alumno",
 *     type="integer",
 *     description="ID del alumno"
 *   ),
 *     @OA\Property(
 *     property="id_comision",
 *     type="integer",
 *     description="ID de la comision"
 *  )
 * )
 */
class Alumno_comision extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_alumno', 'id_comision'];

    protected $table = 'Alumnos_comision';

    public $timestamps = true;
}
