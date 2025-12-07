<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BellQController;

Route::get('/', function () {
    return view('welcome');
});

/* API BellQ */
Route::get('/bells', [BellQController::class, 'index']);
Route::post('/bells', [BellQController::class, 'store']);
Route::delete('/bells/{id}', [BellQController::class, 'destroy']);
