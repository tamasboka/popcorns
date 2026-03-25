<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Series\SeriesCollection;
use App\Http\Resources\Series\SeriesResource;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_series = Series::all();
        return (new SeriesCollection($all_series))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->tokenCan('admin')) {
            $series = Series::create($request->all());
            return (new SeriesResource($series))
                ->response()
                ->setStatusCode(201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $series = Series::with(['seasons.episodes'])->findOrFail($id);
        return (new SeriesResource($series))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
