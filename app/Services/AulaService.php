<?php

namespace App\Services;

use App\Data\AulaData;
use App\Repositories\AulaRepository;
use App\Mappers\AulaMapper;
use App\Models\Aula;
class AulaService implements AulaRepository
{

private $aulaMapper;

    public function __construct(AulaMapper $aulaMapper)
    {
        $this->aulaMapper = $aulaMapper;
    }

    public function obtenerTodasAulas()
    {
        try {
            $aulas = Aula::all();
            return response()->json($aulas, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener las aulas'], 500);
        }
    }

    public function obtenerAulaPorId($id)
    {
        try {
            $aula = Aula::find($id);
            if ($aula) {
                return response()->json($aula, 200);
            } else {
                return response()->json(['error' => 'No existe el aula'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al obtener el aula'], 500);
        }
    }

    public function guardarAula($aula)
    {
        try {
            $aula = $this->aulaMapper->toAula(new AulaData($aula->nombre, $aula->laboratorio));
            $aula->save();
            return response()->json($aula, 201);
        } catch (\Exception $e) {
            \Log::error('Error al guardar el alumno: ' . $e->getMessage());

            return response()->json(['error' => 'Hubo un error al guardar el aula'], 500);
        }
    }

    public function eliminarAulaPorId($id)
    {
        try {
            $aula = Aula::find($id);
            if ($aula) {
                $aula->delete();
                return response()->json(['success' => 'Se eliminó el aula'], 200);
            } else {
                return response()->json(['error' => 'No existe el aula'], 404);
            }
        } catch (\Exception $e) {
            \Log::error('Error al eliminar el aula: ' . $e->getMessage());

            return response()->json(['error' => 'Hubo un error al eliminar el aula'], 500);
        }
    }
}
