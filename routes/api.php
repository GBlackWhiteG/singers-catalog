<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;

Route::controller(SingerController::class)->group(function () {
    Route::get('/singers', 'index');
    Route::post('/singers', 'store');
    Route::patch('/singers/{singer}', 'update');
    Route::delete('/singers/{singer}', 'destroy');
});

Route::controller(SongController::class)->group(function () {
    Route::get('/songs', 'index');
    Route::post('/songs', 'store');
    Route::patch('/songs/{song}', 'update');
    Route::delete('/songs/{song}', 'destroy');
});

Route::controller(AlbumController::class)->group(function () {
    Route::get('/albums', 'index');
    Route::post('/albums', 'store');
    Route::patch('/albums/{album}', 'update');
    Route::delete('/albums/{album}', 'destroy');
});
