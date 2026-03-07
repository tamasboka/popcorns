<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public $table = 'users';
    protected $fillable = [
        'name',
        'password',
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
}
