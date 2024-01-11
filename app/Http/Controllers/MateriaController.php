<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MateriaService;

class MateriaController extends Controller
{
    protected $materiaService;

    public function __construct(MateriaService $materiaService)
    {
        $this->materiaService = $materiaService;
    }

    /**
     * @OA\Get(
     *     path="/api/materias",
     *     summary="Obtener todas las materias",
     *     tags={"Materias"},
     *     @OA\Response(
     *         response=200,
     *         description="Obtener todas las materias"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al obtener las materias"
     *     )
     * )
     */
    public function index()
    {
        return $this->materiaService->obtenerTodasMaterias();
    }

    /**
     * @OA\Get(
     *     path="/api/materias/{id}",
     *     summary="Obtener una materia por id",
     *     tags={"Materias"},
     *     @OA\Parameter(
     *         description="ID de la materia",
     *         in="path",
     *         name="id",
     *         required=true,
     *         example=1,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Obtener una materia por id"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No existe la materia"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al obtener la materia"
     *     )
     * )
     */
    public function show($id)
    {
        return $this->materiaService->obtenerMateriaPorId($id);
    }

    /**
     * @OA\Get(
     *     path="/api/materias/nombre/{nombre}",
     *     summary="Obtener una materia por nombre",
     *     tags={"Materias"},
     *     @OA\Parameter(
     *          description="Nombre de la materia",
     *          in="path",
     *          name="nombre",
     *          required=true,
     *          example="Programacion",
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Obtener una materia por nombre",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/MateriaValidate")
     *          )
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="No existe la materia"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener la materia"
     *     )
     * )
     */
    public function verMateriaPorNombre($nombre)
    {
        return $this->materiaService->obtenerMateriaPorNombre($nombre);
    }

    /**
     * @OA\Post(
     *     path="/api/materias/guardar",
     *     summary="Guardar una materia",
     *     tags={"Materias"},
     *     @OA\RequestBody(
     *         description="Datos de la materia",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/MateriaData")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Guardar una materia"
     *     ),
     *     @OA\Response(
     *          response=400,
     *          description="Ya existe una materia con ese nombre"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al guardar la materia"
     *     )
     * )
     */
    public function store(Request $request)
    {
        return $this->materiaService->guardarMateria($request);
    }

    /**
     * @OA\Put(
     *     path="/api/materias/actualizar/{id}",
     *     summary="Actualizar una materia",
     *     tags={"Materias"},
     *     @OA\Parameter(
     *          description="ID de la materia",
     *          in="path",
     *          name="id",
     *          required=true,
     *          example=1,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\RequestBody(
     *          description="Datos de la materia",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/MateriaData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Actualizar una materia"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="No existe la materia"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al actualizar la materia"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        return $this->materiaService->actualizarMateria($request, $id);
    }

    /**
     * @OA\Delete(
     *     path="/api/materias/eliminar/{id}",
     *     summary="Eliminar una materia",
     *     tags={"Materias"},
     *     @OA\Parameter(
     *         description="ID de la materia",
     *         in="path",
     *         name="id",
     *         required=true,
     *         example=1,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Eliminar una materia"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="No existe la materia"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al eliminar la materia"
     *     )
     * )
     */
    public function destroy($id)
    {
        return $this->materiaService->eliminarMateriaPorId($id);
    }
}
