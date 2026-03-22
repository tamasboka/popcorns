<?php

namespace App\Http\Resources\Rating;

use App\Http\Resources\User\UserResource;
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
            "rater" => new UserResource($this->whenLoaded('user')),
            "stars" => $this->rating,
            "title" => $this->review_title,
            "content" => $this->review_content,
            "has_spoilers" => $this->has_spoilers
        ];
    }
}
