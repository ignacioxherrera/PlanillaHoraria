<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes_materia extends Model
{
    use HasFactory;

    protected $fillable = ['id_docente', 'id_materia'];

    protected $table = 'docentes_materia';

    public $timestamps = true;
}
