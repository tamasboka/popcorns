<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Director',
        ]);

        Role::create([
            'name' => 'Writer',
        ]);

        Role::create([
            'name' => 'Actor',
        ]);

        Role::create([
            'name' => 'Voice actor',
        ]);
    }
}
