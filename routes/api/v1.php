<?php

use App\Http\Controllers\Api\v1\GameController;
use App\Http\Controllers\Api\v1\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/games', GameController::class);
Route::get('/pokemon', PokemonController::class);
