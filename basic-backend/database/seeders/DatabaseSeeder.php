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
            GenreSeeder::class,
            MovieSeeder::class,
            PersonSeeder::class,
            RatingSeeder::class,
            ReputationSeeder::class,
            ReviewSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            WatchlistSeeder::class,
        ]);
    }
}
