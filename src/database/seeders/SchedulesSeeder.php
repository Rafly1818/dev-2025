<?php

namespace Database\Seeders;

use App\Models\Barbers;
use App\Models\Schedules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua barber yang aktif
        $activeBarbers = Barbers::where('status', 'active')->get();

        // Tentukan jadwal kerja default (Senin - Jumat, 09:00 - 17:00)
        $workDays = [1, 2, 3, 4, 5]; // 1=Senin, 5=Jumat
        $startTime = '09:00:00';
        $endTime = '17:00:00';

        foreach ($activeBarbers as $barber) {
            foreach ($workDays as $day) {
                Schedules::firstOrCreate(
                    [
                        'barber_id' => $barber->id,
                        'day_of_week' => $day,
                    ],
                    [
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                    ]
                );
            }
        }
    }
}