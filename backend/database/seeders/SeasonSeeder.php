<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Season::create([
            "number" => 1,
            "series_id" => 1
        ]);

        Season::create([
            "number" => 1,
            "series_id" => 2
        ]);

        Season::create([
            "number" => 2,
            "series_id" => 2
        ]);
    }
}
