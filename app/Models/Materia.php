<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="MateriaValidate",
 *     title="MateriaValidate",
 *     description="Esquema del objeto MateriaValidate",
 *     @OA\Property(
 *          property="nombre",
 *          type="string",
 *          description="Nombre de la materia"
 *     ),
 *     @OA\Property(
 *          property="fecha_creacion",
 *          type="datetime",
 *          description="Fecha de creacion de la materia"
 *     ),
 *     @OA\Property(
 *          property="fecha_modificacion",
 *          type="datetime",
 *          description="Fecha de modificacion de la materia"
 *     )
 * )
 */
class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
    public $timestamps = true;
    protected $fillable = ['nombre', 'fecha_creacion', 'fecha_modificacion'];

}
