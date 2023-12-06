<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios_materia extends Model
{
    use HasFactory;

    protected $fillable = ['id_horario', 'id_materia'];

    protected $table = 'horarios_materia';

    public $timestamps = true;
}
