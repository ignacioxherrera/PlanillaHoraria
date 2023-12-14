<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno_comision extends Model
{
    use HasFactory;

    protected $table = 'Alumnos_comision';

    protected $fillable = ['id', 'dni_alumno', 'id_comision'];

    public $timestamps = false;
}
