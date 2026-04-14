<?php

namespace App\Http\Resources\Mail;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class MailCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return \Illuminate\Support\Collection|null
     */
    public function toArray(Request $request): ?Collection
    {
        return $this->collection;
    }
}
