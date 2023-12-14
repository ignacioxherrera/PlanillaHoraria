<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AulaService;

class AulaController extends Controller
{
    protected $aulaService;

    public function __construct(AulaService $aulaService){
        $this->aulaService = $aulaService;
    }

    /**
     * @OA\Get(
     *      path="/api/aulas",
     *     operationId="getAulasList",
     *      tags={"Aula"},
     *      summary="Obtener lista de aulas",
     *      description="Devuelve la lista de aulas",
     *      @OA\Response(
     *          response=200,
     *          description="Lista de aulas",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  ref="#/components/schemas/Aula"
     *              )
     *          )
     *      )
     * )
     */
    public function index()
    {
        return $this->aulaService->obtenerTodasAulas();
    }

    /**
     * @OA\Get(
     *      path="/api/aulas/{id}",
     *      summary="Obtener aula por id",
     *      description="Devuelve un aula",
     *     operationId="getAulaById",
     *      tags={"Aula"},
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id del aula",
     *          required=true,
     *          @OA\Schema(
     *          type="integer",
     *          format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Aula",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="Aula no encontrada"
     *      )
     * )
     */
    public function obtenerAulaPorId($id){
        return $this->aulaService->obtenerAulaPorId($id);
    }

    /**
     * @OA\Post(
     *      path="/api/aulas/guardar",
     *      summary="Guardar aula",
     *      description="Guardar un aula",
     *     operationId="saveAula",
     *      tags={"Aula"},
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/AulaData")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Aula creado correctamente",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error al guardar el aula"
     *      )
     * )
     */
    public function guardarAula(Request $request)
    {
        return $this->aulaService->guardarAula($request->json()->all());
    }

    /**
     * @OA\Delete(
     *      path="/api/aulas/eliminar/{id}",
     *      summary="Eliminar aula",
     *      description="Eliminar un aula",
     *     operationId="deleteAula",
     *      tags={"Aula"},
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="Id del aula",
     *          required=true,
     *          @OA\Schema(
     *          type="integer",
     *          format="int64"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Aula eliminado correctamente",
     *          @OA\JsonContent(ref="#/components/schemas/Aula")
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="Aula no encontrada"
     *      )
     * )
     */
    public function eliminarAulaPorId($id)
    {
        return $this->aulaService->eliminarAulaPorId($id);
    }
}
