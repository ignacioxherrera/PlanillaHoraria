<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\UsuarioData;
use App\Services\UsuarioService;


class UsuarioController extends Controller
{

    protected $usuarioService;

    public function __construct(UsuarioService $usuarioService){
        $this->usuarioService = $usuarioService;
    }

    /**
     * @OA\Get(
     *      path="/api/usuarios",
     *     summary="Obtener todos los usuarios",
     *     description="Devuelve todos los usuarios",
     *     operationId="getUsuarios",
     *     tags={"Usuario"},
     *     @OA\Response(
     *          response=200,
     *          description="Usuarios",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Usuario")
     *          )
     *      ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener los usuarios"
     *      )
     * )
     */
    public function index(){
        return $this->usuarioService->obtenerTodosUsuarios();
    }



    /**
     * @OA\Get(
     *     path="/api/usuarios/{dni}",
     *     summary="Obtener usuario por dni",
     *     description="Devuelve un usuario",
     *     operationId="getUsuarioPorDni",
     *     tags={"Usuario"},
     *     @OA\Parameter(
     *          name="dni",
     *          in="path",
     *          description="DNI del usuario",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Usuario",
     *          @OA\JsonContent(ref="#/components/schemas/Usuario")
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Usuario no encontrado"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al obtener el usuario"
     *     )
     * )
     */
    public function show($dni){
        return $this->usuarioService->obtenerUsuarioPorDni($dni);
    }

    /**
     * @OA\Post(
     *     path="/api/usuarios/guardar",
     *     summary="Guardar usuario",
     *     description="Guardar un usuario",
     *     operationId="guardarUsuario",
     *     tags={"Usuario"},
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UsuarioData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Usuario guardado correctamente"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al guardar el usuario"
     *     )
     * )
     */
    public function store(Request $request){
        return $this->usuarioService->guardarUsuario($request);
    }

    /**
     * @OA\Put(
     *     path="/api/usuarios/actualizar/{dni}",
     *     summary="Actualizar usuario por dni",
     *     description="Actualizar usuario por dni",
     *     operationId="actualizarUsuarioPorDni",
     *     tags={"Usuario"},
     *     @OA\Parameter(
     *          name="dni",
     *          in="path",
     *          description="DNI del usuario",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UsuarioData")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Usuario actualizado correctamente"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Usuario no encontrado"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al actualizar el usuario"
     *     )
     * )
     */
    public function update(Request $request, $dni){
        return $this->usuarioService->actualizarUsuario($dni, $request);
    }

    /**
     * @OA\Delete(
     *     path="/api/usuarios/eliminar/{dni}",
     *     summary="Eliminar usuario por dni",
     *     description="Eliminar usuario por dni",
     *     operationId="eliminarUsuarioPorDni",
     *     tags={"Usuario"},
     *     @OA\Parameter(
     *          name="dni",
     *          in="path",
     *          description="DNI del usuario",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="int64"
     *          )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Usuario eliminado correctamente"
     *     ),
     *     @OA\Response(
     *          response=404,
     *          description="Usuario no encontrado"
     *     ),
     *     @OA\Response(
     *          response=500,
     *          description="Error al eliminar el usuario"
     *     )
     * )
     */
    public function destroy($dni)
    {
        return $this->usuarioService->eliminarUsuarioPorDni($dni);
    }

}
