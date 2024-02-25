<?php

namespace App\Http\Controllers;

use App\Services\AlumnoService;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    protected $alumnoService;

    public function __construct(AlumnoService $alumnoService)
    {
        $this->alumnoService = $alumnoService;
    }

    /**
     * @OA\Get(
     *     path="/api/usuarios/alumnos",
     *     summary="Obtener todos los alumnos",
     *     description="Obtener todos los alumnos",
     *     operationId="obtenerTodosAlumnos",
     *     tags={"Alumno"},
     *     @OA\Response(
     *     response=200,
     *     description="Alumnos obtenidos correctamente",
     *     @OA\JsonContent(
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/Usuario")
     *     )
     *    ),
     *     @OA\Response(
     *     response=404,
     *     description="No se encontraron alumnos"
     *  ),
     *     @OA\Response(
     *     response=500,
     *     description="Error al obtener los alumnos"
     *   )
     * )
     */
    public function index(){
        return $this->alumnoService->obtenerTodosAlumnos();
    }



    /**
     * @OA\Get(
     *     path="/api/usuarios/alumnos/{dni}",
     *     summary="Obtener un alumno por dni",
     *     description="Obtener un alumno por dni",
     *     operationId="obtenerAlumnoPorDni",
     *     tags={"Alumno"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del alumno",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\Response(
     *     response=200,
     *     description="Alumno obtenido correctamente"
     *   ),
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
    public function show($dni){
        return $this->alumnoService->obtenerAlumnoPorDni($dni);
    }

    /**
     * @OA\Post(
     *     path="/api/usuarios/guardar/alumno",
     *     summary="Guardar alumno",
     *     description="Guardar un alumno",
     *     operationId="guardarAlumno",
     *     tags={"Alumno"},
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AlumnoData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Alumno guardado correctamente"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al guardar el alumno"
     *     )
     * )
     */
    public function store(Request $request){
        return $this->alumnoService->guardarAlumno($request);
    }

    /**
     * @OA\Put(
     *     path="/api/usuarios/actualizar/alumno/{dni}",
     *     summary="Actualizar alumno",
     *     description="Actualizar un alumno",
     *     operationId="actualizarAlumno",
     *     tags={"Alumno"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del alumno",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AlumnoData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Alumno actualizado correctamente"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Alumno no encontrado"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al actualizar el alumno"
     *     )
     * )
     */
    public function update(Request $request, $dni)
    {
        return $this->alumnoService->actualizarAlumno($request, $dni);
    }

    /**
     * @OA\Delete(
     *     path="/api/usuarios/eliminar/alumno/{dni}",
     *     summary="Eliminar alumno",
     *     description="Eliminar un alumno",
     *     operationId="eliminarAlumno",
     *     tags={"Alumno"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del alumno",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\Response(
     *          response=200,
     *          description="Alumno eliminado correctamente"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Alumno no encontrado"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al eliminar el alumno"
     *     )
     * )
     */
    public function destroy($dni){
        return $this->alumnoService->eliminarAlumnoPorDni($dni);
    }
}
