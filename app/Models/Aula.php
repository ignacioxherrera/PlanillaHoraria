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
 *     property="nro",
 *     type="integer",
 *     description="Número del aula"
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

    protected $primaryKey = 'nro';
    public $incrementing = false;
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['nro', 'laboratorio', 'fecha_creacion', 'fecha_modificacion'];


}
