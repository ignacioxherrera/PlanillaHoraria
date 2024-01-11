<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ComisionService;

class ComisionController extends Controller
{
    protected $comisionService;

    public function __construct(ComisionService $comisionService){
        $this->comisionService = $comisionService;
    }

    /**
     * @OA\Get (
     *     path="/api/comisiones",
     *     tags={"Comision"},
     *     summary="Obtener todas las comisiones",
     *     description="Obtener todas las comisiones",
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Comision")
     *          )
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener las comisiones"
     *     )
     * )
     */
    public function index(){
        return $this->comisionService->obtenerTodasComisiones();
    }

    /**
     * @OA\Get (
     *    path="/api/comisiones/carreras/{carrera}",
     *     tags={"Comision"},
     *     summary="Obtener comisiones por carrera",
     *     description="Obtener comisiones por carrera",
     *     @OA\Parameter(
     *          name="carrera",
     *          in="path",
     *          description="Carrera de la comision",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Comision")
     *          )
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener las comisiones"
     *     )
     * )
     */
    public function verComisionesPorCarrera($carrera){
        return $this->comisionService->obtenerTodasComisionesPorCarrera($carrera);
    }

    /**
     * @OA\Get (
     *     path="/api/comisiones/{id}",
     *     summary="Obtener comision por id",
     *     description="Obtener comision por id",
     *     operationId="getComisionPorId",
     *     tags={"Comision"},
     *     @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id de la comision",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa",
     *          @OA\JsonContent(ref="#/components/schemas/Comision")
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Comision no encontrada"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener la comision"
     *     )
     * )
     */
    public function show($id)
    {
        return $this->comisionService->obtenerComisionPorId($id);
    }

    /**
     * @OA\Post (
     *     path="/api/comisiones/guardar",
     *     tags={"Comision"},
     *     summary="Guardar comision",
     *     description="Guardar comision",
     *     @OA\RequestBody(
     *          description="Datos de la comision",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ComisionData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa",
     *          @OA\JsonContent(ref="#/components/schemas/ComisionData")
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al guardar la comision"
     *     )
     * )
     */
    public function store(Request $request){
        return $this->comisionService->guardarComision($request);
    }

    /**
     * @OA\Put (
     *     path="/api/comisiones/actualizar/{id}",
     *     tags={"Comision"},
     *     summary="Actualizar comision",
     *     description="Actualizar comision",
     *     @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id de la comision",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\RequestBody(
     *          description="Datos de la comision",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ComisionData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa",
     *          @OA\JsonContent(ref="#/components/schemas/ComisionData")
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Comision no encontrada"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al actualizar la comision"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        return $this->comisionService->actualizarComision($request, $id);
    }

    /**
     * @OA\Delete (
     *     path="/api/comisiones/eliminar/{id}",
     *     tags={"Comision"},
     *     summary="Eliminar comision",
     *     description="Eliminar comision",
     *     @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id de la comision",
     *          required=true,
     *          @OA\Schema(
     *              type="integer",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Operación exitosa"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Comision no encontrada"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al eliminar la comision"
     *     )
     * )
     */
    public function destroy($id){
        return $this->comisionService->eliminarComisionPorId($id);
    }
}

