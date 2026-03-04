<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    public $fillable = [
        "title",
        "release_year",
        "length_hours",
        "rating",
        "director",
        "writer",
        //"genre",
        "is_watched"
    ];
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'genre_movies');
    }
}
