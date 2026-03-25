<?php

namespace App\Http\Resources\Series;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SeriesCollection extends ResourceCollection
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
}
