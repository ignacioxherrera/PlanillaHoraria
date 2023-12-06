<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'laboratorio'];

    protected $table = 'aulas';

    public $timestamps = true;
}
