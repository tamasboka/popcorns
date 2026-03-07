<?php

namespace App\Http\Resources\Watchlist;

use App\Http\Resources\Movie\MovieCollection;
use App\Http\Resources\Movie\MovieResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WatchlistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'movies' => new MovieCollection($this->whenLoaded('movies')),
        ];
    }
}
