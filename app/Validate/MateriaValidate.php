<?php

namespace App\Validate;
use App\Models\Materia;
use Exception;
use Illuminate\Support\Facades\Log;

class MateriaValidate
{
    public function nombreExiste($nombre){
        $materia = Materia::where('nombre', $nombre)->exists();
        return $materia;
    }
}
