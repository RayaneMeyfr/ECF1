<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cour;
use App\Models\Creneaux;
use App\Models\Reservation;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(50)->create();
        Cour::factory(50)->create();
        Creneaux::factory(15)->create();
    }
}
