<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    public $table = 'genre_movies';
    public $fillable = [
        "genre_id",
        "movie_id",
    ];
}
