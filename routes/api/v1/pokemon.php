<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Pokemon;

Route::get('/pokemon', Pokemon\IndexController::class)->name('index');
Route::get('/pokemon/{param}', Pokemon\ShowController::class)->name('show');
