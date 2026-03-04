<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    public $fillable = [
        "genre_id",
        "movie_id",
    ];
}
