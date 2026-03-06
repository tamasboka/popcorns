<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::create([
            'movie_id' => 1,
            'rated_by' => 1,
            'rating' => 9.5,
            'rating_title' => 'jó film',
            'rating_comment' => 'tetszett',
            'has_spoilers' => 0
        ]);
        Rating::create([
            'movie_id' => 1,
            'rated_by' => 2,
            'rating' => 1.5,
            'rating_title' => 'nem jó film',
            'rating_comment' => 'nem tetszett',
            'has_spoilers' => 0
        ]);
    }
}
