<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Data\AlumnoData;
use App\Mappers\AlumnoMapper;
use App\Services\AlumnoService;


class AlumnoController extends Controller
{

    protected $alumnoService;

    public function __construct(AlumnoService $alumnoService){
        $this->alumnoService = $alumnoService;
    }

    /**
     * @OA\Get(
     *      path="/api/alumnos",
     *     operationId="getAlumnosList",
     *      tags={"Alumno"},
     *      summary="Obtener lista de alumnos",
     *      description="Devuelve la lista de alumnos",
     *      @OA\Response(
     *          response=200,
     *          description="Lista de alumnos",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  ref="#/components/schemas/Alumno"
     *              )
     *          )
     *      )
     * )
     */
    public function index(){
        return $this->alumnoService->obtenerTodosAlumnos();
    }

    /**
     * @OA\Get(
     *      path="/api/alumnos/{dni}",
     *      summary="Obtener alumno por dni",
     *      description="Devuelve un alumno",
     *     operationId="getAlumnoByDni",
     *      tags={"Alumno"},
     *      @OA\Parameter(
     *          name="dni",
     *          in="path",
     *          description="DNI del alumno",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Alumno",
     *          @OA\JsonContent(
     *              ref="#/components/schemas/Alumno"
     *          )
     *      ),
     *     @OA\Response(
     *     response=404,
     *     description="Alumno no encontrado"
     *  ),
     *     @OA\Response(
     *     response=500,
     *     description="Error al obtener el alumno"
     *  )
     * )
     */
    public function obtenerAlumnoPorDni($dni){
        return $this->alumnoService->obtenerAlumnoPorDni($dni);
    }

    /**
     * @OA\Post(
     *      path="/api/alumnos/guardar",
     *     operationId="guardarAlumno",
     *      tags={"Alumno"},
     *      summary="Guardar nuevo alumno",
     *      description="Guardar nuevo alumno",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AlumnoData")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Alumno guardado correctamente",
     *          @OA\JsonContent(
     *              ref="#/components/schemas/Alumno"
     *          )
     *      )
     * )
     */
    public function guardarAlumno(Request $request){
        $alumnoData = new AlumnoData(
            $request->dni,
            $request->nombre,
            $request->apellido,
            $request->email,
            $request->contrasenia
        );
        return $this->alumnoService->guardarAlumno($alumnoData);
    }

    /**
     * @OA\Delete(
     *      path="/api/alumnos/eliminar/{dni}",
     *      summary="Eliminar alumno por dni",
     *      description="Eliminar alumno por dni",
     *     operationId="eliminarAlumnoPorDni",
     *      tags={"Alumno"},
     *      @OA\Parameter(
     *          name="dni",
     *          in="path",
     *          description="DNI del alumno",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Alumno eliminado correctamente"
     *    ),
     *     @OA\Response(
     *          response=404,
     *          description="Alumno no encontrado"
     *   ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al eliminar el alumno"
     *      )
     * )
     */
    public function eliminarAlumnoPorDni($dni)
    {
        return $this->alumnoService->eliminarAlumnoPorDni($dni);
    }

}
