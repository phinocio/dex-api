<?php

use App\Http\Controllers\Api\v1\DexController;
use App\Http\Controllers\Api\v1\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{id}', [GameController::class, 'show']);

Route::get('/dexes', [DexController::class, 'index']);
Route::get('/dexes/{id}', [DexController::class, 'show']);
