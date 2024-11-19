<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 *
 * @OA\Post(
 *     path="/api/albums",
 *     summary="Create album",
 *     tags={"Albums"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Album name"),
 *                     @OA\Property(property="release_date", type="date", example="2012-12-12"),
 *                     @OA\Property(property="singer_id", type="integer", example=1),
 *                     @OA\Property(property="song_ids", type="array", @OA\Items(
 *                         @OA\Property(property="singer_id", type="integer", example=1),
 *                         @OA\Property(property="track_number", type="integer", example=1),
 *                     )),
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
 *             @OA\Property(property="name", type="string", example="Album name"),
 *             @OA\Property(property="release_date", type="date", example="2012-12-12"),
 *             @OA\Property(property="singer_id", type="integer", example=1),
 *             @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *             @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *             @OA\Property(property="songs", type="array", @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Song name"),
 *                 @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                 @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *                 @OA\Property(property="pivot", type="object",
 *                     @OA\Property(property="album_id", type="integer", example=1),
 *                     @OA\Property(property="song_id", type="integer", example=1),
 *                     @OA\Property(property="track_number", type="integer", example=1),
 *                 ),
 *             )),
 *             @OA\Property(property="singer", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Singer name"),
 *                 @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                 @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *             ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/albums",
 *      summary="Album list",
 *      tags={"Albums"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="name", type="string", example="Album name"),
 *              @OA\Property(property="release_date", type="date", example="2012-12-12"),
 *              @OA\Property(property="singer_id", type="integer", example=1),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *              @OA\Property(property="songs", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Song name"),
 *                  @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                  @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *                  @OA\Property(property="pivot", type="object",
 *                      @OA\Property(property="album_id", type="integer", example=1),
 *                      @OA\Property(property="song_id", type="integer", example=1),
 *                      @OA\Property(property="track_number", type="integer", example=1),
 *                  ),
 *              )),
 *              @OA\Property(property="singer", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Singer name"),
 *                  @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                  @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *              ),
 *          )),
 *      ),
 *  ),
 *
 * @OA\Patch(
 *      path="/api/albums/{album}",
 *      summary="Update album",
 *      tags={"Albums"},
 *
 *     @OA\Parameter(
 *         description="Album ID",
 *         in="path",
 *         name="album",
 *         required=true,
 *         example=1
 *     ),
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Album name"),
 *                      @OA\Property(property="release_date", type="date", example="2012-12-12"),
 *                      @OA\Property(property="singer_id", type="integer", example=1),
 *                      @OA\Property(property="song_ids", type="array", @OA\Items(
 *                          @OA\Property(property="singer_id", type="integer", example=1),
 *                          @OA\Property(property="track_number", type="integer", example=1),
 *                      )),
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
 *              @OA\Property(property="name", type="string", example="Album name"),
 *              @OA\Property(property="release_date", type="date", example="2012-12-12"),
 *              @OA\Property(property="singer_id", type="integer", example=1),
 *              @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *              @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *              @OA\Property(property="songs", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Song name"),
 *                  @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                  @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *                  @OA\Property(property="pivot", type="object",
 *                      @OA\Property(property="album_id", type="integer", example=1),
 *                      @OA\Property(property="song_id", type="integer", example=1),
 *                      @OA\Property(property="track_number", type="integer", example=1),
 *                  ),
 *              )),
 *              @OA\Property(property="singer", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="Singer name"),
 *                  @OA\Property(property="created_at", type="date", example="2024-11-18T16:58:51.000000Z"),
 *                  @OA\Property(property="updated_at", type="date", example="2024-11-18T17:09:39.000000Z"),
 *              ),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Delete(
 *       path="/api/albums/{album}",
 *       summary="Delete album",
 *       tags={"Albums"},
 *
 *      @OA\Parameter(
 *          description="Album ID",
 *          in="path",
 *          name="album",
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
class AlbumController extends Controller
{

}
