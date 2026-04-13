<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reputation extends Model
{
    public $table = 'reputations';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
