<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Movie\MovieCollection;
use App\Http\Resources\Movie\MovieResource;
use App\Http\Resources\Rating\RatingCollection;
use App\Http\Resources\Watchlist\WatchlistCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'watched' => new MovieCollection($this->whenLoaded('watched')),
            'watchlists' => new WatchlistCollection($this->whenLoaded('watchlists')),
            'favourite_movie' => new MovieResource($this->whenLoaded('favourite_movie')),
            'ratings' => new RatingCollection($this->whenLoaded('ratings')),
            'bgcolor' => $this->profile_background,
            'role' => $this->role,
            'join_date' => $this->created_at,
            'joined_since' => $this->created_at->diffForHumans(),
        ];
    }
}
