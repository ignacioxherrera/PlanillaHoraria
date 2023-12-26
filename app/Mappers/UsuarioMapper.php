<?php

namespace App\Mappers;

use App\Models\Usuario;
use App\Data\UsuarioData;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuarioMapper
{
    public static function toUsuario($usuarioData)
    {
        return new Usuario([
            'dni' => $usuarioData->dni,
            'nombre' => $usuarioData->nombre,
            'apellido' => $usuarioData->apellido,
            'email' => $usuarioData->email,
            'contrasenia' => Hash::make($usuarioData->contrasenia),
            'tipo' => $usuarioData->tipo,
            'fecha_modificacion' => Carbon::now(),
            'fecha_creacion' => Carbon::now()
        ]);
    }

    public static function toUsuarioData($usuario, $pass)
    {
        return [
            'dni' => $usuario->dni,
            'nombre' => $usuario->nombre,
            'apellido' => $usuario->apellido,
            'email' => $usuario->email,
            'contrasenia' => Hash::make($pass),
            'tipo' => $usuario->tipo
        ];
    }



}
