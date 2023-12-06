<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aulas_materia extends Model
{
    use HasFactory;

    protected $fillable = ['id_aula', 'id_materia'];

    protected $table = 'aulas_materias';

    public $timestamps = true;
}
