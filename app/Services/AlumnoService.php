<?php

namespace App\Services;

use App\Repositories\AlumnoRepository;
use App\Mappers\UsuarioMapper;
use App\Models\Usuario;

class AlumnoService implements AlumnoRepository
{
    protected $usuarioMapper;

    public function __construct(UsuarioMapper $usuarioMapper)
    {
        $this->usuarioMapper = $usuarioMapper;
    }


    public function obtenerTodosAlumnos(){
        try {
            $alumnos = Usuario::all();
            return response()->json($alumnos, 200);
        } catch (Exception $e) {
            Log::error('Error al obtener los usuarios: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al obtener los usuarios'], 500);
        }
    }

    public function obtenerAlumnoPorDni($dni){
        $alumno = Usuario::where('dni', $dni)->where('tipo', 'alumno')->first();
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        try {
            return response()->json($alumno, 200);
        } catch (Exception $e) {
            Log::error('Error al obtener el alumno: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al obtener el alumno'], 500);
        }
    }

    public function guardarAlumno($alumnoData)
    {
        if ($this->usuarioMapper->emailExiste($alumnoData['email'])) {
            return response()->json(['error' => 'El email ya existe'], 400);
        }
        try {
            $alumno = $this->usuarioMapper->toUsuario($alumnoData);
            $alumno->save();
            return response()->json(['success' => 'Alumno guardado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al guardar el alumno: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al guardar el alumno'], 500);
        }
    }

    public function actualizarAlumno($request, $dni){
        $alumno = Usuario::where('dni', $dni)->where('tipo', 'alumno')->first();
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        try {
            $alumno->update($request->all());
            return response()->json(['success' => 'Alumno actualizado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al actualizar el alumno: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al actualizar el alumno'], 500);
        }
    }

    public function eliminarAlumnoPorDni($dni){
        $alumno = Usuario::where('dni', $dni)->where('tipo', 'alumno')->first();
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        try {
            $alumno->delete();
            return response()->json(['success' => 'Alumno eliminado correctamente'], 200);
        } catch (Exception $e) {
            Log::error('Error al eliminar el alumno: ' . $e->getMessage());
            return response()->json(['error' => 'Hubo un error al eliminar el alumno'], 500);
        }
    }

}
