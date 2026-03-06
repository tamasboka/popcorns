<?php

namespace App\Http\Resources\Rating;

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
            "rater" => new UserResource(User::findOrFail($this->rated_by)),
            "stars" => $this->rating,
            "title" => $this->rating_title,
            "comment" => $this->rating_comment,
            "spoiler" => $this->has_spoilers
        ];
    }
}
