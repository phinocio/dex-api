<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Game;

Route::get('/games', Game\IndexController::class)->name('index');
Route::get('/games/{param}', Game\ShowController::class)->name('show');
