<?php

declare(strict_types=1);

use App\Http\Controllers\Api\v1\DexController;
use App\Http\Controllers\Api\v1\GameController;
use App\Http\Controllers\Api\v1\GenerationController;
use App\Http\Controllers\Api\v1\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/generations', [GenerationController::class, 'index']);
Route::get('/generations/{param}', [GenerationController::class, 'show']);

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{param}', [GameController::class, 'show']);

Route::get('/dexes', [DexController::class, 'index']);
Route::get('/dexes/{param}', [DexController::class, 'show']);

Route::get('/pokemon', [PokemonController::class, 'index']);
Route::get('/pokemon/{param}', [PokemonController::class, 'show']);
