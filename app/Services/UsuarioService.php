<?php

namespace App\Services;

use App\Repositories\UsuarioRepository;
use App\Mappers\UsuarioMapper;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioService implements UsuarioRepository
{

    private $usuarioMapper;

    public function __construct(UsuarioMapper $usuarioMapper)
    {
        $this->usuarioMapper = $usuarioMapper;
    }


    public function obtenerTodosUsuarios()
    {
        try {
            $usuarios = Usuario::all();
            return response()->json($usuarios, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener los usuarios'], 500);
        }

    }

    public function obtenerUsuarioPorDni($dni)
    {
        $usuario = Usuario::find($dni);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        try {
            return response()->json($usuario, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener el usuario'], 500);
        }
    }

    public function guardarUsuario($usuarioData)
    {
        try {
            $usuario = $this->usuarioMapper->toUsuario($usuarioData);
            $usuario->save();
            return $usuario;
        } catch (\Exception $e) {
            \Log::error('Error al guardar el usuario: ' . $e->getMessage());

            return response()->json(['error' => 'Hubo un error al guardar el usuario'], 500);

        }
    }

    public function actualizarUsuario($request, $dni, $pass=false)
    {
        $usuario = Usuario::find($dni);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        try {
            $usuario->update($this->usuarioMapper->toUsuarioData($request, (!$pass) ? $request->input('contrasenia') : $usuario->contrasenia));
            return response()->json(['success' => 'Usuario actualizado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al actualizar el usuario'], 500);
        }
    }

    public function actualizarContrasenia($request, $dni)
    {
        $usuario = Usuario::find($dni);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        try {
            $usuario->update([
                'contrasenia' => Hash::make($request->input('contrasenia'))
            ]);
            return response()->json(['success' => 'Usuario actualizado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al actualizar el usuario'], 500);
        }
    }

    public function eliminarUsuarioPorDni($dni)
    {
        $usuario = Usuario::find($dni);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        try {
            $usuario->delete();
            return response()->json(['success' => 'Usuario eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al eliminar el usuario'], 500);
        }
    }
}
