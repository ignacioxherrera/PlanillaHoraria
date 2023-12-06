<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'email'];

    protected $table = 'alumnos';

    public $timestamps = true;

}