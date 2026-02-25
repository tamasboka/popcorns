<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMovieController;

Route::apiResource('/movies',ApiMovieController::class);
