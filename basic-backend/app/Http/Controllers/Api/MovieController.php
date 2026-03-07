<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\MovieRequest;
use App\Http\Resources\Movie\MovieCollection;
use App\Http\Resources\Movie\MovieResource;
use App\Models\Movie;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_movies = Movie::with([
            'genres',
            'ratings.user',
        ])->get();
        //$all_movies = Movie::all();
        return (new MovieCollection($all_movies))
            ->additional([
                "success" => true,
                "message" => "Shown all movies.",
                "count" => $all_movies->count()
            ])
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        try {
            $movie = Movie::create($request->all());
            return (new MovieResource($movie))
                ->additional([
                    "success" => true,
                    "message" => "Movie created with ID {$movie->id}"
                ])
                ->response()
                ->setStatusCode(201);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 422);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $movie = Movie::with([
                'genres',
                'ratings.user'
            ])->findOrFail($id);
            return (new MovieResource($movie))
                ->additional([
                    "success" => true,
                    "message" => "Movie {$id} shown"
                ])
                ->response()
                ->setStatusCode(200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage()
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, string $id)
    {
        try {
            $movie = Movie::findOrFail($id);
            $movie->update($request->all());
            return (new MovieResource($movie))
                ->additional([
                    "success" => true,
                    "message" => "Movie {$id} successfully updated"
                ])
                ->response()
                ->setStatusCode(200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 404);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $movie = Movie::findOrFail($id);
            $movie->delete();
            return (new MovieResource($movie))
                ->response()
                ->setStatusCode(204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 404);
        }
    }
}
