<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\GameDex;

Route::get('/', GameDex\IndexController::class)->name('index');
Route::get('/{param}', GameDex\ShowController::class)->name('show');
