<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $table = 'ratings';
    public $fillable = [
        'movie_id',
        'user_id',
        'review_title',
        'review_content',
        'has_spoilers',
        'rating',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function movie() {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
