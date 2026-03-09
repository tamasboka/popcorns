<?php

namespace App\Http\Resources\Rating;

use App\Http\Resources\Review\ReviewResource;
use App\Http\Resources\User\UserResource;
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
            "rater" => new UserResource($this->whenLoaded('user')),
            "stars" => $this->rating,
            "content" => new ReviewResource($this->whenLoaded('review')),
        ];
    }
}
