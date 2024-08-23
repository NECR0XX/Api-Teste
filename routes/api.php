<?php

use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\TrainerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/minhas-informacoes', function () {
    return response()->json([
        'nome' => 'Wesley Carron Ananias',
        'RM' => '2647'
    ]);
});

Route::apiResource('/Sports', SportController::class);
Route::apiResource('/Competitor', CompetitorController::class);
Route::apiResource('/Locality', LocalityController::class);
Route::apiResource('/Trainer', TrainerController::class);