<?php

declare(strict_types=1);

use App\Http\Controllers\v1\GameDex\GameDexController;
use Illuminate\Support\Facades\Route;

Route::prefix('game-dexes')->group(function () {
    Route::controller(GameDexController::class)->group(function () {
        Route::get('/', 'index')->name('game-dexes.index');
        Route::get('/{slug}', 'show')->name('game-dexes.show');
    });
});
