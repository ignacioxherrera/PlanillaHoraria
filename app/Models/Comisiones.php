<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comisiones extends Model
{
    use HasFactory;

    protected $fillable = ['anio', 'division', 'carrera'];

    protected $table = 'comisiones';

    public $timestamps = true;
}
