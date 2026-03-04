<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
    }
}
