<?php

namespace App\Http\Resources;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
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
            "rater" => [
                "id" => $this->rated_by,
                "name" => User::findOrFail($this->rated_by)->name,
            ],
            "stars" => $this->rating,
            "title" => $this->rating_title,
            "comment" => $this->rating_comment,
            "spoiler" => $this->has_spoilers
        ];
    }
}
