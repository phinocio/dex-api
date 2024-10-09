<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\GameDex;

Route::get('/game-dexes', GameDex\IndexController::class)->name('index');
Route::get('/game-dexes/{param}', GameDex\ShowController::class)->name('show');
