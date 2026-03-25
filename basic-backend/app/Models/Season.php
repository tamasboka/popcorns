<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public $table = 'seasons';
    public $fillable = [
        'number',
        'series_id'
    ];
    public function series() {
        return $this->belongsTo(Series::class, 'series_id');
    }
    public function episodes() {
        return $this->hasMany(Movie::class, 'season_id');
    }
}
