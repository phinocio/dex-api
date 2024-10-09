<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Pokemon;

Route::get('/', Pokemon\IndexController::class)->name('index');
Route::get('/{param}', Pokemon\ShowController::class)->name('show');
