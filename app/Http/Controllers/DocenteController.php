<?php

namespace App\Http\Controllers;

use App\Services\UsuarioService;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }

    /**
     * @OA\Get(
     *     path="/api/usuarios/docentes",
     *     summary="Obtener todos los docentes",
     *     description="Obtener todos los docentes",
     *     operationId="obtenerTodosDocentes",
     *     tags={"Docente"},
     *     @OA\Response(
     *     response=200,
     *     description="Docentes obtenidos correctamente"
     *    ),
     *     @OA\Response(
     *     response=500,
     *     description="Error al obtener los docentes"
     *   )
     * )
     */
    public function index(){
        return $this->usuarioService->obtenerTodosDocentes();
    }

    /**
     * @OA\Get(
     *     path="/api/usuarios/docentes/{dni}",
     *     summary="Obtener un docente por dni",
     *     description="Obtener un docente por dni",
     *     operationId="obtenerDocentePorDni",
     *     tags={"Docente"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del docente",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\Response(
     *     response=200,
     *     description="Docente obtenido correctamente"
     *   ),
     *     @OA\Response(
     *     response=404,
     *     description="Docente no encontrado"
     *   )
     * )
     */
    public function show($dni){
        return $this->usuarioService->obtenerDocentePorDni($dni);
    }

    /**
     * @OA\Post(
     *     path="/api/usuarios/docentes",
     *     summary="Guardar un docente",
     *     description="Guardar un docente",
     *     operationId="guardarDocente",
     *     tags={"Docente"},
     *     @OA\RequestBody(
     *     required=true,
     *     description="Objeto docente",
     *     @OA\JsonContent(ref="#/components/schemas/DocenteData")
     *     ),
     *     @OA\Response(
     *     response=200,
     *     description="Docente guardado correctamente"
     *  ),
     *     @OA\Response(
     *     response=400,
     *     description="El email ya existe"
     * ),
     *     @OA\Response(
     *     response=500,
     *     description="Error al guardar el docente"
     * )
     * )
     */
    public function store(Request $request){
        return $this->usuarioService->guardarDocente($request->all());
    }

    /**
     * @OA\Put(
     *     path="/api/usuarios/docentes/{dni}",
     *     summary="Actualizar un docente",
     *     description="Actualizar un docente",
     *     operationId="actualizarDocente",
     *     tags={"Docente"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del docente",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\RequestBody(
     *     required=true,
     *     description="Objeto docente",
     *     @OA\JsonContent(ref="#/components/schemas/DocenteData")
     *  ),
     *     @OA\Response(
     *     response=200,
     *     description="Docente actualizado correctamente"
     *  ),
     *     @OA\Response(
     *     response=404,
     *     description="Docente no encontrado"
     *  ),
     *     @OA\Response(
     *     response=500,
     *     description="Error al actualizar el docente"
     *  )
     * )
     */
    public function update(Request $request, $dni){
        return $this->usuarioService->actualizarDocente($request, $dni);
    }

    /**
     * @OA\Delete(
     *     path="/api/usuarios/docentes/{dni}",
     *     summary="Eliminar un docente",
     *     description="Eliminar un docente",
     *     operationId="eliminarDocentePorDni",
     *     tags={"Docente"},
     *     @OA\Parameter(
     *     name="dni",
     *     in="path",
     *     description="DNI del docente",
     *     required=true,
     *     @OA\Schema(
     *     type="string"
     *    )
     *  ),
     *     @OA\Response(
     *     response=200,
     *     description="Docente eliminado correctamente"
     *  ),
     *     @OA\Response(
     *     response=404,
     *     description="Docente no encontrado"
     *  )
     * )
     */
    public function destroy($dni)
    {
        return $this->usuarioService->eliminarDocentePorDni($dni);
    }
}
