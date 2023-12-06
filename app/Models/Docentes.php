<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'correo'];

    protected $table = 'docentes';

    public $timestamps = true;
}
