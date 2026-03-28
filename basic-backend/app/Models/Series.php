<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public $table = 'series';
    public $fillable = [
        'title'
    ];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }
}
