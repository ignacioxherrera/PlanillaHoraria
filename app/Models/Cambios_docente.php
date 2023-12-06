<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambios_docente extends Model
{
    use HasFactory;

    protected $fillable = ['id_docente_anter', 'id_docente_nuevo', 'cambio'];

    protected $table = 'cambios_docente';

    public $timestamps = true;

}
