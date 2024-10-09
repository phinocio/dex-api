<?php

declare(strict_types=1);

use App\Http\Controllers\Api\v1\GameController;
use App\Http\Controllers\Api\v1\GameDexController;
use App\Http\Controllers\Api\v1\GenerationController;
use App\Http\Controllers\Api\v1\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/generations', [GenerationController::class, 'index'])->name('generations.index');
Route::get('/generations/{param}', [GenerationController::class, 'show'])->name('generations.show');

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{param}', [GameController::class, 'show'])->name('games.show');

Route::get('/game-dexes', [GameDexController::class, 'index'])->name('game_dexes.index');
Route::get('/game-dexes/{param}', [GameDexController::class, 'show'])->name('game_dexes.show');

Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemon/{param}', [PokemonController::class, 'show'])->name('pokemon.show');
