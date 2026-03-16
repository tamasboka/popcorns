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
        "release_month",
        "release_day",
        "length_hours",
    ];
    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'genre_movies');
    }
    public function ratings(): HasMany {
        return $this->hasMany(Rating::class);
    }
    public function writers() {
        return $this->belongsToMany(Person::class, 'movie_writers');
    }
    public function directors() {
        return $this->belongsToMany(Person::class, 'movie_directors');
    }
    public function actors() {
        return $this->belongsToMany(Person::class, 'movie_actors')
            ->withPivot('character');
    }
}
