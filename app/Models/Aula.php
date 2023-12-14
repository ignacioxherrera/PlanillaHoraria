<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Aula",
 *    title="Aula",
 *     description="Esquema del objeto Aula",
 *     @OA\Property(
 *     property="id",
 *     type="integer",
 *     description="Id del aula"
 * ),
 *     @OA\Property(
 *     property="nombre",
 *     type="string",
 *     description="Nombre del aula"
 * ),
 *     @OA\Property(
 *     property="laboratorio",
 *     type="boolean",
 *     description="Laboratorio del aula"
 * ),
 * )
 */
class Aula extends Model
{
    use HasFactory;

    protected $table = 'aulas';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['id', 'nombre', 'laboratorio', 'fecha_creacion', 'fecha_modificacion'];


}
