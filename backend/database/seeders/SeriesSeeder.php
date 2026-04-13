<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Series::create([
            "title" => "The Amazing Digital Circus",
            "release_year" => "2023",
            "release_month" => "10",
            "release_day" => "14"
        ]);
        Series::create([
            "title" => "Gravity Falls",
            "release_year" => "2012",
        ]);
        Series::create([
            "title" => "Rick and Morty",
            "release_year" => "2013",
        ]);
    }
}
