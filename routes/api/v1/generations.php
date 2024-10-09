<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Generation;

Route::get('/generations', Generation\IndexController::class)->name('index');
Route::get('/generations/{param}', Generation\ShowController::class)->name('show');
