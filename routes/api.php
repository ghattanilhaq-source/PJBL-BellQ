<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BellQController;

Route::get('/bells', [BellQController::class, 'index']);
Route::post('/bells', [BellQController::class, 'store']);
Route::get('/bells/{id}', [BellQController::class, 'show']);
Route::put('/bells/{id}', [BellQController::class, 'update']);
Route::delete('/bells/{id}', [BellQController::class, 'destroy']);
