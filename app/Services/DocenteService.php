<?php

namespace App\Services;
use App\Repositories\DocenteRepository;
use App\Mappers\UsuarioMapper;
use App\Models\Usuario;

class DocenteService implements DocenteRepository
{
    protected $usuarioMapper;

    public function __construct(UsuarioMapper $usuarioMapper)
    {
        $this->usuarioMapper = $usuarioMapper;
    }

    public function obtenerTodosDocentes(){
        try {
            $docentes = Usuario::where('tipo', 'docente')->get();
            return response()->json($docentes, 200);
        } catch (Exception $e) {
            Log::error('Error al obtener los usuarios: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al obtener los usuarios'], 500);
        }
    }

    public function obtenerDocentePorDni($dni){
        $docente = Usuario::where('dni', $dni)->where('tipo', 'docente')->first();
        if (!$docente) {
            return response()->json(['error' => 'Docente no encontrado'], 404);
        }
        try {
            return response()->json($docente, 200);
        } catch (Exception $e) {
            Log::error('Error al obtener el docente: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al obtener el docente'], 500);
        }
    }

    public function guardarDocente($docenteData)
    {
        if ($this->usuarioMapper->emailExiste($docenteData['email'])) {
            return response()->json(['error' => 'El email ya existe'], 400);
        }
        try {
            $docente = $this->usuarioMapper->toUsuario($docenteData);
            $docente->save();
            return response()->json(['success' => 'Docente guardado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al guardar el docente: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al guardar el docente'], 500);
        }
    }

    public function actualizarDocente($request, $dni){
        $docente = Usuario::where('dni', $dni)->where('tipo', 'docente')->first();
        if (!$docente) {
            return response()->json(['error' => 'Docente no encontrado'], 404);
        }
        try {
            $docente->update($request->all());
            return response()->json(['success' => 'Docente actualizado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al actualizar el docente: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al actualizar el docente'], 500);
        }
    }

    public function eliminarDocentePorDni($dni){
        $docente = Usuario::where('dni', $dni)->where('tipo', 'docente')->first();
        if (!$docente) {
            return response()->json(['error' => 'Docente no encontrado'], 404);
        }
        try {
            $docente->delete();
            return response()->json(['success' => 'Docente eliminado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al eliminar el docente: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al eliminar el docente'], 500);
        }
    }

}
