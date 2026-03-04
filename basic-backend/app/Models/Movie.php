<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    public $table = 'movies';
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
    public function ratings(): HasMany {
        return $this->hasMany(Rating::class);
    }
}
