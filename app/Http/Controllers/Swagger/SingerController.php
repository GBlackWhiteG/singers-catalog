<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/singers",
 *     summary="Create singer",
 *     tags={"Singers"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Singer name")
 *                 ),
 *             },
 *         ),
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Singer name"),
 *             @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *             @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/singers",
 *      summary="Singers list",
 *      tags={"Singers"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="name", type="string", example="Singer name"),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *          )),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *      path="/api/singers/{singer}",
 *      summary="Update singer",
 *      tags={"Singers"},
 *
 *     @OA\Parameter(
 *         description="Song ID",
 *         in="path",
 *         name="singers",
 *         required=true,
 *         example=1
 *     ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Singers name"),
 *                  ),
 *              },
 *          ),
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="name", type="string", example="Singers name"),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *          ),
 *      ),
 *  ),
 *
 * @OA\Delete(
 *       path="/api/singers/{singer}",
 *       summary="Delete singer",
 *       tags={"Singers"},
 *
 *      @OA\Parameter(
 *          description="Singer ID",
 *          in="path",
 *          name="singer",
 *          required=true,
 *          example=1
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(type="object", example="Successfully deleted"),
 *      ),
 *  ),
 *
 */
class SingerController extends Controller
{

}
