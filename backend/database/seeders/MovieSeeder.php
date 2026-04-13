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

        // The Amazing Digital Circus episodes
        Movie::create([
            "title" => "Pilot",
            "release_year" => 2023,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 1
        ]);
        Movie::create([
            "title" => "Candy Carrier Chaos!",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 2
        ]);
        Movie::create([
            "title" => "The Mystery Of Mildenhall Manor",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 3
        ]);
        Movie::create([
            "title" => "Fast Food Masquerade",
            "release_year" => 2024,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 4
        ]);
        Movie::create([
            "title" => "Untitled",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 5
        ]);
        Movie::create([
            "title" => "They all get guns",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 6
        ]);
        Movie::create([
            "title" => "Beach episode",
            "release_year" => 2025,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 7
        ]);
        Movie::create([
            "title" => "hjsakldfhl",
            "release_year" => 2026,
            "length_hours" => 0.3,
            "type" => "episode",
            "season_id" => 1,
            "episode_number" => 8
        ]);

        // Gravity Falls episodes
        Movie::create([
            "title" => "Tourist Trapped",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "The Legend of the Gobblewonker",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Headhunters",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "The Hand That Rocks the Mabel",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "The Inconveniencing",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Dipper vs. Manliness",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Double Dipper",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Irrational Treasure",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "The Time Traveler's Pig",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Fight Fighters",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Little Dipper",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Summerween",
            "release_year" => 2012,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Boss Mabel",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Bottomless Pit!",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "The Deep End",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Carpet Diem",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Boyz Crazy",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Land Before Swine",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Dreamscaperers",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create([
            "title" => "Gideon Rises",
            "release_year" => 2013,
            "length_hours" => 0.37,
            "type" => "episode",
            "season_id" => 2
        ]);
        Movie::create(["title" => "Scary-oke", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Into the Bunker", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "The Golf War", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Sock Opera", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Soos and the Real Girl", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Little Gift Shop of Horrors", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Society of the Blind Eye", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Blendin's Game", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "The Love God", "release_year" => 2014, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Northwest Mansion Mystery", "release_year" => 2015, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Not What He Seems", "release_year" => 2015, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "A Tale of Two Stans", "release_year" => 2015, "length_hours" => 0.5, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Dungeons, Dungeons & More Dungeons", "release_year" => 2015, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "The Stanchurian Candidate", "release_year" => 2015, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "The Last Mabelcorn", "release_year" => 2015, "length_hours" => 0.4, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Roadside Attraction", "release_year" => 2015, "length_hours" => 0.31, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Dipper and Mabel vs. the Future", "release_year" => 2015, "length_hours" => 0.34, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Weirdmageddon 1", "release_year" => 2015, "length_hours" => 0.37, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Weirdmageddon 2: Escape from Reality", "release_year" => 2015, "length_hours" => 0.31, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Weirdmageddon 3: Take Back The Falls", "release_year" => 2016, "length_hours" => 0.3, "type" => "episode", "season_id" => 3]);
        Movie::create(["title" => "Weirdmageddon 4: Somewhere in the Woods", "release_year" => 2016, "length_hours" => 0.3, "type" => "episode", "season_id" => 3]);
    }
}
