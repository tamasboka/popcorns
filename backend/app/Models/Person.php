<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'people';
    public $fillable = [
        'name',
        'birth_date'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function reputations()
    {
        return $this->hasMany(Reputation::class);
    }

    public function director_for()
    {
        return $this->belongsToMany(Movie::class, 'movie_directors', 'movie_id', 'person_id');
    }

    public function writer_for()
    {
        return $this->belongsToMany(Movie::class, 'movie_writers', 'movie_id', 'person_id');
    }

    public function acted_in() {
        return $this->belongsToMany(Movie::class, 'movie_actors', 'movie_id', 'person_id');
    }
}
