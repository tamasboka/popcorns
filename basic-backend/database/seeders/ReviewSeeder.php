<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'review_title' => 'jó film',
            'review_content' => 'tetszett',
            'has_spoilers' => 0
        ]);

        Review::create([
            'review_title' => 'nem jó film',
            'review_content' => 'nem tetszett',
            'has_spoilers' => 0
        ]);
    }
}
