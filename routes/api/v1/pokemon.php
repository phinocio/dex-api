<?php

declare(strict_types=1);

use App\Http\Controllers\v1\Pokemon\PokemonController;
use Illuminate\Support\Facades\Route;

Route::prefix('pokemon')->group(function () {
    Route::controller(PokemonController::class)->group(function () {
        Route::get('/', 'index')->name('pokemon.index');
        Route::get('/{slug}', 'show')->name('pokemon.show');
    });
});
