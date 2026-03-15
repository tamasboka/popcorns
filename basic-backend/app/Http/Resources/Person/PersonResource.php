<?php

namespace App\Http\Resources\Person;

use App\Http\Resources\Movie\MovieCollection;
use App\Http\Resources\Role\RoleCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'birthdate' => $this->birth_date,
            'roles' => new RoleCollection($this->whenLoaded('roles')),
            'director_for' => new MovieCollection($this->whenLoaded('director_for')),
            'writer_for' => new MovieCollection($this->whenLoaded('writer_for')),
            'acted_in' => new MovieCollection($this->whenLoaded('acted_in')),
        ];
    }
}
