<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function index(): JsonResponse
    {
        $albums = Album::with('songs', 'singer')->get();

        return response()->json($albums);
    }

    public function store(): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
            'release_date' => 'required|date',
            'singer_id' => 'required|integer|exists:singers,id',
            'song_ids' => 'required|array',
            'song_ids.*.song_id' => 'integer|exists:songs,id',
            'song_ids.*.track_number' => 'required|integer'
        ]);

        $album = new Album();
        DB::transaction(function() use ($album, $data) {
            $album->name = $data['name'];
            $album->release_date = $data['release_date'];
            $album->singer_id = $data['singer_id'];
            $album->save();

            foreach ($data['song_ids'] as $song) {
                $album->songs()->attach($song['song_id'], ['track_number' => $song['track_number']]);
            }
        }, 2);

        return response()->json($album->load('songs', 'singer'));
    }

    public function update(Album $album): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
            'release_date' => 'required|date',
            'singer_id' => 'required|integer|exists:singers,id',
            'song_ids' => 'required|array',
            'song_ids.*.song_id' => 'integer|exists:songs,id',
            'song_ids.*.track_number' => 'required|integer'
        ]);

        DB::transaction(function () use ($album, $data) {
            $album->update([
                'name' => $data['name'],
                'release_date' => $data['release_date'],
                'singer_id' => $data['singer_id'],
            ]);

            $album->songs()->detach();

            foreach ($data['song_ids'] as $song) {
                $album->songs()->attach($song['song_id'], ['track_number' => $song['track_number']]);
            }
        }, 2);

        return response()->json($album->load('songs', 'singer'));
    }

    public function destroy(Album $album): JsonResponse
    {
        $album->delete();

        return response()->json('Successfully deleted');
    }
}
