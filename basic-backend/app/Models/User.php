<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = 'users';
    protected $fillable = [
        'name',
        'password',
        'birthdate'
    ];
    public function watchlists() {
        return $this->hasMany(Watchlist::class);
    }
    public function ratings() {
        return $this->hasMany(Rating::class);
    }
    public function watched() {
        return $this->belongsToMany(Movie::class, 'movies_watched');
    }
    public function favourite_movie() {
        return $this->hasOne(Movie::class, 'id', 'favourite_movie_id');
    }
}
