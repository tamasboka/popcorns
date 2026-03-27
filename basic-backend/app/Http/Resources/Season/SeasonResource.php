<?php

namespace App\Http\Resources\Season;

use App\Http\Resources\Movie\MovieCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeasonResource extends JsonResource
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
            'number' => $this->number,
            'episodes' => new MovieCollection($this->whenLoaded('episodes')),
        ];
    }
}
