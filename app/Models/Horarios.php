<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;

    protected $fillable = ['inicio', 'fin', 'dia'];

    protected $table = 'horarios';

    public $timestamps = true;
}
