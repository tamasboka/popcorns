<?php

namespace App\Http\Resources\Movie;

use App\Http\Resources\Genre\GenreCollection;
use App\Http\Resources\Rating\RatingCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "hours" => $this->length_hours,
            "director" => $this->director,
            "writer" => $this->writer,
            "watched" => $this->is_watched,
            "genres" => new GenreCollection($this->genres),
            "ratings" => new RatingCollection($this->whenLoaded('ratings')),
        ];
    }
}
