<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/songs",
 *     summary="Create song",
 *     tags={"Songs"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Song name")
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
 *             @OA\Property(property="name", type="string", example="Song name"),
 *             @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *             @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/songs",
 *      summary="Song list",
 *      tags={"Songs"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="name", type="string", example="Song name"),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *          )),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *      path="/api/songs/{song}",
 *      summary="Update song",
 *      tags={"Songs"},
 *
 *     @OA\Parameter(
 *         description="Song ID",
 *         in="path",
 *         name="song",
 *         required=true,
 *         example=1
 *     ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Song name"),
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
 *              @OA\Property(property="name", type="string", example="Song name"),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z")
 *          ),
 *      ),
 *  ),
 *
 * @OA\Delete(
 *       path="/api/songs/{song}",
 *       summary="Delete song",
 *       tags={"Songs"},
 *
 *      @OA\Parameter(
 *          description="Song ID",
 *          in="path",
 *          name="song",
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
class SongController extends Controller
{

}
