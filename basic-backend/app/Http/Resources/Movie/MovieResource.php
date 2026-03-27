<?php

namespace App\Http\Resources\Movie;

use App\Http\Resources\Genre\GenreCollection;
use App\Http\Resources\Person\PersonCollection;
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
            "release_year" => $this->release_year,
            "release_month" => $this->release_month,
            "release_day" => $this->release_day,
            "director" => new PersonCollection($this->whenLoaded('directors')),
            "writer" => new PersonCollection($this->whenLoaded('writers')),
            "actors" => new PersonCollection($this->whenLoaded('actors')),
            //"watched" => $this->is_watched,
            "genres" => new GenreCollection($this->whenLoaded('genres')),
            "ratings" => new RatingCollection($this->whenLoaded('ratings')),
            "avg" => substr($this->avg, 0, 3)
        ];
    }
}
