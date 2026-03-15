<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            UserSeeder::class,
            GenreSeeder::class,
            PersonSeeder::class,
            ReviewSeeder::class,
            RatingSeeder::class,
            ReputationSeeder::class,
            RoleSeeder::class,

            WatchlistSeeder::class,
        ]);
    }
}
