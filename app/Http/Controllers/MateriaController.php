<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriaController extends Controller
{
    public function obtenerTodasMaterias(){
        return materias::all();
    }
}
