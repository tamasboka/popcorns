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
            'review_id' => 1,
            'rating' => 9.5,
        ]);
        Rating::create([
            'movie_id' => 1,
            'rated_by' => 2,
            'review_id' => 2,
            'rating' => 1.5,
        ]);
    }
}
