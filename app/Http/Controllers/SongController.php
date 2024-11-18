<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\JsonResponse;

class SongController extends Controller
{
    public function index(): JsonResponse
    {
        $songs = Song::all();

        return response()->json($songs, 200);
    }

    public function store(): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        $singer = Song::create($data);

        return response()->json($singer, 200);
    }

    public function update(Song $song): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        $song->update($data);

        return response()->json($song, 200);
    }

    public function destroy(Song $song): JsonResponse
    {
        $song->delete();

        return response()->json("Successfully deleted", 200);
    }
}
