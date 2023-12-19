<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $primaryKey = 'dni';
    public $incrementing = false;

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    public $timestamps = true;

    protected $fillable = ['dni', 'nombre', 'apellido', 'email', 'contrasenia', 'fecha_creacion', 'fecha_modificacion'];

    protected $hidden = ['contrasenia'];
}
