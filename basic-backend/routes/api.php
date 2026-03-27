<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\SeriesController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

Route::apiResource('/movies', MovieController::class)
    ->middlewareFor(['store', 'update', 'delete'], 'auth:sanctum');

Route::apiResource('/users', UserController::class)
    ->middleWareFor(['index', 'update', 'delete'], 'auth:sanctum');

Route::apiResource('/genres', GenreController::class)
    ->middleware('auth:sanctum');

Route::apiResource('/series', SeriesController::class)
    ->middlewareFor(['store', 'update', 'delete'], 'auth:sanctum');

Route::apiResource('/ratings', RatingController::class);

Route::get('/topmovies', [MovieController::class, 'top']);
Route::get('/newestmovies', [MovieController::class, 'newestadded']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');
