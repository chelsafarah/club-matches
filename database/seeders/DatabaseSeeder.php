<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StadiumSeeder::class,
            ClubSeeder::class,
            ManagerSeeder::class,
            PlayerSeeder::class,
            MatchesSeeder::class,
            // StadiumSeeder::class,
        ]);
    }
}
