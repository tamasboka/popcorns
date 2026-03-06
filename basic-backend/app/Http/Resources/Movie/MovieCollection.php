<?php

namespace App\Http\Resources\Movie;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): mixed
    {
        return $this->collection;
    }
    public function with(Request $request) {
        return [

        ];
    }
}
