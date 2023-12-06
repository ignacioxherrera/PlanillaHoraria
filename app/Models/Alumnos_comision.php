<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos_comision extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'comision_id'];

    protected $table = 'alumnos_comisiones';

    public $timestamps = true;
}
