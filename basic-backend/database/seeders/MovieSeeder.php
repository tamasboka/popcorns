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
            "rating" => 8.6,
            "director" => "George Lucas",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars V: The Empire Strikes Back",
            "release_year" => 1980,
            "length_hours" => 2,
            "rating" => 8.7,
            "director" => "Irvin Kershner",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars VI: Return of the Jedi",
            "release_year" => 1983,
            "length_hours" => 2.2,
            "rating" => 8.3,
            "director" => "Richard Marquand",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars I: The Phantom Menace",
            "release_year" => 1999,
            "length_hours" => 2.2,
            "rating" => 6.5,
            "director" => "George Lucas",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars II: Attack of the Clones",
            "release_year" => 2002,
            "length_hours" => 2.3,
            "rating" => 6.6,
            "director" => "George Lucas",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars III: Revenge of the Sith",
            "release_year" => 2005,
            "length_hours" => 2.3,
            "rating" => 7.7,
            "director" => "George Lucas",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars VII: The Force Awakens",
            "release_year" => 2015,
            "length_hours" => 2.2,
            "rating" => 7.7,
            "director" => "J.J. Abrams",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars VIII: The Last Jedi",
            "release_year" => 2017,
            "length_hours" => 2.5,
            "rating" => 6.8,
            "director" => "Rian Johnson",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars IX: The Rise of Skywalker",
            "release_year" => 2019,
            "length_hours" => 2.3,
            "rating" => 6.3,
            "director" => "J.J. Abrams",
            "writer" => "George Lucas",
            //"genre" => "action",
            //"is_watched" => true
        ]);
        Movie::create([
            "title" => "Star Wars: The Clone Wars",
            "release_year" => 2008,
            "length_hours" => 1.5,
            "rating" => 6.0,
            "director" => "Dave Filoni",
            "writer" => "Henry Gilroy",
            //"genre" => "action",
            //"is_watched" => false
        ]);
    }
}
