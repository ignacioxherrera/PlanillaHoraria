<?php

namespace App\Validate;
use App\Models\Usuario;

class UsuarioValidate
{
    public function emailExiste($email){
        $usuario = Usuario::where('email', $email)->exists();
        return $usuario;
    }
}
