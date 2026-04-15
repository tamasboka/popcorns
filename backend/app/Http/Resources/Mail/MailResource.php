<?php

namespace App\Http\Resources\Mail;

use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MailResource extends JsonResource
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
            'sender' => new UserResource($this->whenLoaded('sender')),
            //'receiver' => new UserResource($this->whenLoaded('receiver')),
            'title' => $this->title,
            'body' => $this->body,
            'type' => $this->type,
            'is_read' => $this->is_read
        ];
    }
}
