<?php

use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

Route::apiResource('/movies',MovieController::class);
Route::apiResource('/users', UserController::class);
Route::apiResource('/genres', GenreController::class);
