<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    private array $genres = [
        'Action',
        'Adventure',
        'Comedy',
        'Drama',
        'Fantasy',
        'Horror',
        'Mystery',
        'Romance',
        'Sci-Fi',
        'Thriller',
        'Western',
        'Noir',
        'Biography',
        'Documentary',
        'History',
        'True Crime',
        'Educational',
        'Animation',
        'Anime',
        'Musical',
        'Family',
        'Short Film',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sort($this->genres);
        foreach ($this->genres as $genre) {
            Genre::create([
                'name' => $genre,
            ]);
        }

        DB::table('genre_movies')->insert([
            'genre_id' => 1,
            'movie_id' => 1
        ]);
        DB::table('genre_movies')->insert([
            'genre_id' => 2,
            'movie_id' => 1
        ]);
        DB::table('genre_movies')->insert([
            'genre_id' => 3,
            'movie_id' => 1
        ]);
        DB::table('genre_movies')->insert([
            'genre_id' => 1,
            'movie_id' => 2
        ]);
        DB::table('genre_movies')->insert([
            'genre_id' => 5,
            'movie_id' => 2
        ]);
    }
}
