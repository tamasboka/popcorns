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
            'password' => 'a'
        ]);
        User::create([
            'name' => 'not tamas',
            'password' => 'a'
        ]);
        User::create([
            'name' => 'different tamas',
            'password' => 'a'
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
