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
            'review_title' => 'jó film',
            'review_content' => 'tetszett',
            'has_spoilers' => 0
        ]);
        Rating::create([
            'movie_id' => 1,
            'rated_by' => 2,
            'rating' => 1.5,
            'review_title' => 'nem jó film',
            'review_content' => 'nem tetszett',
            'has_spoilers' => 0
        ]);
    }
}
