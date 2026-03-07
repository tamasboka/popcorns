<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $table = 'ratings';
    public $fillable = [
        'movie_id',
        'rated_by',
        'rating',
        'rating_title',
        'rating_comment',
        'has_spoilers',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'rated_by');
    }
}
