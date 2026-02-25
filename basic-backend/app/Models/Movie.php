<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = ["title", "release_year", "length_hours", "rating", "director", "writer", "genre", "is_watched"];
}
