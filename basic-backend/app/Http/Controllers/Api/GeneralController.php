<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Movie\MovieCollection;
use App\Http\Resources\Series\SeriesCollection;
use App\Models\Movie;
use App\Models\Series;

class GeneralController extends Controller
{
    public function top()
    {
        $top = Movie::withAvg('ratings as avg', 'rating')->where('avg', '!=', 'null')->orderBy('avg', 'desc')->take(12)->get();
        return (new MovieCollection($top))
            ->additional([
                "success" => true,
                "count" => $top->count()
            ])
            ->response()
            ->setStatusCode(200);
    }

    public function newestadded()
    {
        $newest = Movie::withAvg('ratings as avg', 'rating')->orderBy('created_at', 'desc')->take(12)->get();
        return (new MovieCollection($newest))
            ->additional([
                "success" => true,
                "count" => $newest->count()
            ])
            ->response()
            ->setStatusCode(200);
    }

    public function allmedia() {
        $movies = Movie::withAvg('ratings as avg', 'rating')->with('season.series')->get();
        $series = Series::all();
        return response()->json([
            "success" => true,
            "media" => [
                "movies" => new MovieCollection($movies),
                "series" => new SeriesCollection($series)
            ]
        ], 200);
    }
}
