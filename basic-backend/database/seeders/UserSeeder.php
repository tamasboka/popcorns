<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'tamas',
            'password' => 'a',
            'birthdate' => '2006-07-31'
        ]);
        User::create([
            'name' => 'not tamas',
            'password' => 'a',
            'birthdate' => '2002-07-07'
        ]);
        User::create([
            'name' => 'different tamas',
            'password' => 'a',
            'birthdate' => '1995-01-21'
        ]);

        DB::table('movies_watched')->insert([
            'movie_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('movies_watched')->insert([
            'movie_id' => 6,
            'user_id' => 1,
        ]);
    }
}
