<?php

namespace App\Services;

use App\Repositories\AlumnoRepository;
use App\Mappers\AlumnoMapper;
use App\Models\Alumno;

class AlumnoService implements AlumnoRepository
{

    private $alumnoMapper;

    public function __construct(AlumnoMapper $alumnoMapper)
    {
        $this->alumnoMapper = $alumnoMapper;
    }


    public function obtenerTodosAlumnos()
    {
        try {
            $alumnos = Alumno::all();
            return response()->json($alumnos, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener los alumnos'], 500);
        }

    }

    public function obtenerAlumnoPorDni($dni)
    {
        $alumno = Alumno::find($dni);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        try {
            return response()->json($alumno, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener el alumno'], 500);
        }
    }

    public function guardarAlumno($alumnoData)
    {
        try {
            $alumno = $this->alumnoMapper->toAlumno($alumnoData);
            $alumno->save();
            return $alumno;
        } catch (\Exception $e) {
            \Log::error('Error al guardar el alumno: ' . $e->getMessage());

            return response()->json(['error' => 'Hubo un error al guardar el alumno'], 500);

        }
    }


    public function eliminarAlumnoPorDni($dni)
    {
        $alumno = Alumno::find($dni);
        if (!$alumno) {
            return response()->json(['error' => 'Alumno no encontrado'], 404);
        }
        try {
            $alumno->delete();
            return response()->json(['success' => 'Alumno eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al eliminar el alumno'], 500);
        }
    }
    /*
    {
        try {
            $alumno = Alumno::find($id);
            $alumno->delete();
            return response()->json(['success' => 'Alumno eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al eliminar el alumno'], 500);
        }
    }
*/
}
