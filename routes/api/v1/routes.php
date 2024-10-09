<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Game;
use App\Http\Controllers\Api\v1\Pokemon;
use App\Http\Controllers\Api\v1\GameDex;
use App\Http\Controllers\Api\v1\Generation;

Route::get('/generations', Generation\IndexController::class)->name('generations.index');
Route::get('/generations/{param}', Generation\ShowController::class)->name('generations.show');

Route::get('/games', Game\IndexController::class)->name('games.index');
Route::get('/games/{param}', Game\ShowController::class)->name('games.show');

Route::get('/game-dexes', GameDex\IndexController::class)->name('game-dexes.index');
Route::get('/game-dexes/{param}', GameDex\ShowController::class)->name('game-dexes.show');

Route::get('/pokemon', Pokemon\IndexController::class)->name('pokemon.index');
Route::get('/pokemon/{param}', Pokemon\ShowController::class)->name('pokemon.show');
