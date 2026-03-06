<?php

namespace Database\Seeders;

use App\Models\GenreMovie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenreMovie::create([
            'genre_id' => 1,
            'movie_id' => 1
        ]);
        GenreMovie::create([
            'genre_id' => 2,
            'movie_id' => 1
        ]);
        GenreMovie::create([
            'genre_id' => 3,
            'movie_id' => 1
        ]);
        GenreMovie::create([
            'genre_id' => 1,
            'movie_id' => 2
        ]);
        GenreMovie::create([
            'genre_id' => 5,
            'movie_id' => 2
        ]);
    }
}
