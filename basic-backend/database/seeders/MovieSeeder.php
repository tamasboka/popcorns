<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            "title" => "Star Wars IV: A New Hope",
            "release_year" => 1977,
            "length_hours" => 2,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars V: The Empire Strikes Back",
            "release_year" => 1980,
            "length_hours" => 2,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars VI: Return of the Jedi",
            "release_year" => 1983,
            "length_hours" => 2.2,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars I: The Phantom Menace",
            "release_year" => 1999,
            "length_hours" => 2.2,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars II: Attack of the Clones",
            "release_year" => 2002,
            "length_hours" => 2.3,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars III: Revenge of the Sith",
            "release_year" => 2005,
            "length_hours" => 2.3,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars VII: The Force Awakens",
            "release_year" => 2015,
            "length_hours" => 2.2,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars VIII: The Last Jedi",
            "release_year" => 2017,
            "length_hours" => 2.5,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars IX: The Rise of Skywalker",
            "release_year" => 2019,
            "length_hours" => 2.3,
            'type' => 'movie'
        ]);
        Movie::create([
            "title" => "Star Wars: The Clone Wars",
            "release_year" => 2008,
            "length_hours" => 1.5,
            "type" => "movie",
        ]);
        Movie::create([
            "title" => "Pilot",
            "release_year" => 2023,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "Candy Carrier Chaos!",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "The Mystery Of Mildenhall Manor",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "Fast Food Masquerade",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "Untitled",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "They all get guns",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "Beach episode",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
        Movie::create([
            "title" => "hjsakldfhl",
            "release_year" => 2026,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1
        ]);
    }
}
