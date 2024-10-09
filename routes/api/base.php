<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->as("v1:")->group(static function (): void {
    Route::prefix('/games')->as('games:')->group(base_path('routes/api/v1/games.php'));
    Route::prefix('/game-dexes')->as('game-dexes:')->group(base_path('routes/api/v1/game_dexes.php'));
    Route::prefix('/generations')->as('generations:')->group(base_path('routes/api/v1/generations.php'));
    Route::prefix('/pokemon')->as('pokemon:')->group(base_path('routes/api/v1/pokemon.php'));
});
