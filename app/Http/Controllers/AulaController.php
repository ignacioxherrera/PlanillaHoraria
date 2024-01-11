<?php

namespace App\Http\Controllers;

use App\Services\AulaService;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    protected $aulaService;

    public function __construct(AulaService $aulaService){
        $this->aulaService = $aulaService;
    }

    /**
     * @OA\Get(
     *      path="/api/aulas",
     *     summary="Obtener todas las aulas",
     *     description="Devuelve todas las aulas",
     *     operationId="getAulas",
     *     tags={"Aula"},
     *     @OA\Response(
     *          response=200,
     *          description="Aulas",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Aula")
     *          )
     *      ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener las aulas"
     *      )
     * )
     */
    public function index(){
        return $this->aulaService->obtenerTodasAulas();
    }


    /**
     * @OA\Get(
     *      path="/api/aulas/laboratorios",
     *     summary="Obtener todos los laboratorios",
     *     description="Devuelve todos los laboratorios",
     *     operationId="getLaboratorios",
     *     tags={"Aula"},
     *     @OA\Response(
     *          response=200,
     *          description="Laboratorios",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Aula")
     *          )
     *      ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener los laboratorios"
     *      )
     * )
     */
    public function obtenerLaboratorios(){
        return $this->aulaService->obtenerTodosLaboratorios();
    }


    /**
     * @OA\Get(
     *     path="/api/aulas/{nro}",
     *     summary="Obtener aula por nro",
     *     description="Devuelve un aula",
     *     operationId="getAulaPorNro",
     *     tags={"Aula"},
     *     @OA\Parameter(
     *          name="nro",
     *          in="path",
     *          description="Número del aula",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Aula",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="No existe el aula"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener el aula"
     *     )
     * )
     */
    public function show($nro){
        return $this->aulaService->obtenerAulaPorNro($nro);
    }


    /**
     * @OA\Post(
     *     path="/api/aulas/guardar",
     *     summary="Guardar aula",
     *     description="Guardar un aula",
     *     operationId="guardarAula",
     *     tags={"Aula"},
     *     @OA\RequestBody(
     *          description="Aula a guardar",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AulaData")
     *     ),
     *     @OA\Response(
     *          response=201,
     *          description="Aula",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al guardar el aula"
     *     )
     * )
     */
    public function store(Request $request){
        return $this->aulaService->guardarAula($request);
    }


    /**
     * @OA\Put(
     *     path="/api/aulas/actualizar/{nro}",
     *     summary="Actualizar aula",
     *     description="Actualizar un aula",
     *     operationId="actualizarAula",
     *     tags={"Aula"},
     *     @OA\Parameter(
     *          name="nro",
     *          in="path",
     *          description="Número del aula",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\RequestBody(
     *          description="Aula a actualizar",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AulaData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Aula",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="No existe el aula"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al actualizar el aula"
     *     )
     * )
     */
    public function update(Request $request, $nro){
        return $this->aulaService->actualizarAula($request, $nro);
    }


    /**
     * @OA\Delete(
     *     path="/api/aulas/eliminar/{nro}",
     *     summary="Eliminar aula por nro",
     *     description="Eliminar aula por nro",
     *     operationId="eliminarAulaPorNro",
     *     tags={"Aula"},
     *     @OA\Parameter(
     *          name="nro",
     *          in="path",
     *          description="Número del aula",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Aula eliminada correctamente"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="No existe el aula"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al eliminar el aula"
     *     )
     * )
     */
    public function destroy($nro){
        return $this->aulaService->eliminarAulaPorNro($nro);
    }


}
