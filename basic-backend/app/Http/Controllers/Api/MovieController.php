<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
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
        return response()->json([
            "success" => true,
            "data" => Movie::all(),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        try {
            Movie::create($request->all());
            return response()->json([
                "success" => true,
                "data" => $request->all(),
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "message" => "Hibás adatok!",
            ], 422);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $movie = Movie::findOrFail($id);
            return response()->json([
                "success" => true,
                "data" => $movie,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => "Nincs ilyen film.",
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
            return response()->json([
                "success" => true,
                "data" => $movie,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => "Nincs ilyen film.",
            ], 404);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "message" => "Hibás adatok!",
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
            return response()->json([
                "success" => true,
                "data" => $movie,
            ], 204);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "success" => false,
                "message" => "Nincs ilyen film.",
            ], 404);
        }
    }
}
