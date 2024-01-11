<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Horario",
 *     title="Horario",
 *     description="Esquema del objeto Horario",
 *     @OA\Property(
 *          property="inicio",
 *          type="time",
 *          description="Hora de inicio de la clase"
 *     ),
 *     @OA\Property(
 *          property="fin",
 *          type="time",
 *          description="Hora de fin de la clase"
 *     ),
 *     @OA\Property(
 *          property="dia",
 *          type="enum",
 *          description="Dia de la clase",
 *          enum={"lunes", "martes", "miercoles", "jueves", "viernes"}
 *     ),
 *     @OA\Property(
 *          property="fecha_creacion",
 *          type="datetime",
 *          description="Fecha de creacion del horario"
 *     ),
 *     @OA\Property(
 *          property="fecha_modificacion",
 *          type="datetime",
 *          description="Fecha de modificacion del horario"
 *     )
 * )
 */
class Horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
    public $timestamps = true;
    protected $fillable = ['inicio', 'fin', 'dia', 'fecha_creacion', 'fecha_modificacion'];

}
