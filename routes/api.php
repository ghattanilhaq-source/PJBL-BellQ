<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BellQController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes untuk bell otomatis
Route::apiResource('bells', BellQController::class);
Route::get('/bells/now', [BellQController::class, 'currentBell']);
