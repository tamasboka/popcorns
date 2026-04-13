<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Watchlist::create([
            'user_id' => 1,
            'name' => 'Star Wars original trilogy'
        ]);
        Watchlist::create([
            'user_id' => 2,
            'name' => 'Star Wars prequel trilogy'
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 1,
            'movie_id' => 1,
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 1,
            'movie_id' => 2,
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 1,
            'movie_id' => 3,
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 2,
            'movie_id' => 4,
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 2,
            'movie_id' => 5,
        ]);
        DB::table('watchlist_movies')->insert([
            'watchlist_id' => 2,
            'movie_id' => 6,
        ]);
    }
}
