<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Comision",
 *     title="Comision",
 *     description="Esquema del objeto Comision",
 *     @OA\Property(
 *          property="anio",
 *          type="integer",
 *          description="Año de la comision"
 *     ),
 *     @OA\Property(
 *          property="division",
 *          type="string",
 *          description="Division de la comision"
 *     ),
 *     @OA\Property(
 *          property="carrera",
 *          type="string",
 *          description="Carrera de la comision"
 *     ),
 *     @OA\Property(
 *          property="fecha_creacion",
 *          type="datetime",
 *          description="Fecha de creacion de la comision"
 *     ),
 *     @OA\Property(
 *          property="fecha_modificacion",
 *          type="datetime",
 *          description="Fecha de modificacion de la comision"
 *     )
 * )
 */
class Comision extends Model
{
    use HasFactory;

    protected $table = 'comisiones';

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['anio', 'division', 'carrera', 'fecha_creacion', 'fecha_modificacion'];

}
