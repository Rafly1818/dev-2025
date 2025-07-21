<?php

namespace Database\Seeders;

use App\Models\Reservations;
use App\Models\User;
use Database\Seeders\BarbersSeeder;
use Database\Seeders\ReservationsSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SchedulesSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\UserSeeder;
// use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Console\Scheduling\Schedule;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BarbersSeeder::class,
            RoleSeeder::class,
            SchedulesSeeder::class,
            ServicesSeeder::class,
            ReservationsSeeder::class,
            UserSeeder::class,
        ]);
    }
}
