<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreGenreRequest;
use App\Http\Requests\Genre\UpdateGenreRequest;
use App\Http\Resources\Genre\GenreCollection;
use App\Http\Resources\Genre\GenreResource;
use App\Models\Genre;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->tokenCan('admin')) {
            $genres = Genre::all();
            return (new GenreCollection($genres))
                ->response()
                ->setStatusCode(200);
        }
        return response()->json([
            "message" => "Unauthorized"
        ], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        if ($request->user()->tokenCan('admin')) {
            try {
                $genre = Genre::create($request->all());
                return (new GenreResource($genre))->response()->setStatusCode(201);
            } catch (ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'error' => $e->getMessage()
                ], 422);
            }
        }
        return response()->json([
            "message" => "Unauthorized"
        ], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        if ($request->user()->tokenCan('admin')) {
            try {
                $genre = Genre::with('movies')->findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    "message" => "Genre not found"
                ], 404);
            }
            return (new GenreResource($genre))
                ->response()
                ->setStatusCode(200);
        }
        return response()->json([
            "message" => "Unauthorized"
        ], 401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, string $id)
    {
        if ($request->user()->tokenCan('admin')) {
            try {
                $genre = Genre::findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    "message" => "Genre not found"
                ], 404);
            }
            $genre->update($request->all());
            return (new GenreResource($genre))
                ->response()
                ->setStatusCode(200);
        }
        return response()->json([
            "message" => "Unauthorized"
        ], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre, Request $request)
    {
        if ($request->user()->tokenCan('admin')) {
            try {
                $genre->delete();
                return response()->json([], 204);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'error' => $e->getMessage()
                ], 204);
            }
        }
        return response()->json([
            "message" => "Unauthorized"
        ], 401);
    }
}
