<?php

use App\Http\Controllers\Api\v1\DexController;
use App\Http\Controllers\Api\v1\GameController;
use App\Http\Controllers\Api\v1\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{id}', [GameController::class, 'show']);

Route::get('/dexes', [DexController::class, 'index']);
Route::get('/dexes/{id}', [DexController::class, 'show']);

Route::get('/pokemon', [PokemonController::class, 'index']);
Route::get('/pokemon/{id}', [PokemonController::class, 'show']);
