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
        ]);
        Movie::create([
            "title" => "Star Wars V: The Empire Strikes Back",
            "release_year" => 1980,
            "length_hours" => 2,
        ]);
        Movie::create([
            "title" => "Star Wars VI: Return of the Jedi",
            "release_year" => 1983,
            "length_hours" => 2.2,
        ]);
        Movie::create([
            "title" => "Star Wars I: The Phantom Menace",
            "release_year" => 1999,
            "length_hours" => 2.2,
        ]);
        Movie::create([
            "title" => "Star Wars II: Attack of the Clones",
            "release_year" => 2002,
            "length_hours" => 2.3,
        ]);
        Movie::create([
            "title" => "Star Wars III: Revenge of the Sith",
            "release_year" => 2005,
            "length_hours" => 2.3,
        ]);
        Movie::create([
            "title" => "Star Wars VII: The Force Awakens",
            "release_year" => 2015,
            "length_hours" => 2.2,
        ]);
        Movie::create([
            "title" => "Star Wars VIII: The Last Jedi",
            "release_year" => 2017,
            "length_hours" => 2.5,
        ]);
        Movie::create([
            "title" => "Star Wars IX: The Rise of Skywalker",
            "release_year" => 2019,
            "length_hours" => 2.3,
        ]);
        Movie::create([
            "title" => "Star Wars: The Clone Wars",
            "release_year" => 2008,
            "length_hours" => 1.5,
        ]);
    }
}
