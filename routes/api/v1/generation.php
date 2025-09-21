<?php

declare(strict_types=1);

use App\Http\Controllers\v1\Generation\GenerationController;
use Illuminate\Support\Facades\Route;

Route::prefix('generations')->group(function () {
    Route::controller(GenerationController::class)->group(function () {
        Route::get('/', 'index')->name('generations.index');
        Route::get('/{slug}', 'show')->name('generations.show');
    });
});
