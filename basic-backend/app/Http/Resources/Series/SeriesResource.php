<?php

namespace App\Http\Resources\Series;

use App\Http\Resources\Season\SeasonCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeriesResource extends JsonResource
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
            'title' => $this->title,
            'release_year' => $this->release_year,
            'release_month' => $this->release_month,
            'release_day' => $this->release_day,
            'seasons' => new SeasonCollection($this->whenLoaded('seasons')),
            'count' => $this->count
        ];
    }
}
