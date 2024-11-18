<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\JsonResponse;

class SingerController extends Controller
{
    public function index(): JsonResponse
    {
        $singers = Singer::all();

        return response()->json($singers, 200);
    }

    public function store(): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        $singer = Singer::create($data);

        return response()->json($singer, 200);
    }

    public function update(Singer $singer): JsonResponse
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        $singer->update($data);

        return response()->json($singer, 200);
    }

    public function destroy(Singer $singer): JsonResponse
    {
        $singer->delete();

        return response()->json("Successfully deleted", 200);
    }
}
