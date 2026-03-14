<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'people';

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function reputations()
    {
        return $this->hasMany(Reputation::class);
    }
}
