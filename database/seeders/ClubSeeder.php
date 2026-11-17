<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Add some starter clubs to the database.
     */
    public function run(): void
    {
        Club::create([
            'name' => 'Arsenal',
            'stadium' => 'Emirates Stadium',
            'city' => 'London',
            'latitude' => 51.5549,
            'longitude' => -0.1084,
            'description' => 'Premier League football club based in North London.',
        ]);

        Club::create([
            'name' => 'Liverpool',
            'stadium' => 'Anfield',
            'city' => 'Liverpool',
            'latitude' => 53.4308,
            'longitude' => -2.9608,
            'description' => 'Premier League football club based in Liverpool.',
        ]);

        Club::create([
            'name' => 'Manchester City',
            'stadium' => 'Etihad Stadium',
            'city' => 'Manchester',
            'latitude' => 53.4831,
            'longitude' => -2.2004,
            'description' => 'Premier League football club based in Manchester.',
        ]);

        Club::create([
            'name' => 'Chelsea',
            'stadium' => 'Stamford Bridge',
            'city' => 'London',
            'latitude' => 51.4817,
            'longitude' => -0.1910,
            'description' => 'Premier League football club based in West London.',
        ]);
    }
}