<?php

namespace Database\Seeders;

use App\Models\Barbers;
use App\Models\Reservations;
use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua service dan barber yang ada
        $services = Services::all();
        $barbers = Barbers::where('status', 'active')->get();

        // Jika tidak ada service atau barber, hentikan seeder
        if ($services->isEmpty() || $barbers->isEmpty()) {
            $this->command->info('Tidak ada service atau barber yang tersedia untuk dibuatkan reservasi.');
            return;
        }

        // Buat 10 data reservasi fiktif
        for ($i = 0; $i < 10; $i++) {
            $service = $services->random();
            $barber = $barbers->random();

            // Buat waktu mulai acak dalam 7 hari ke depan
            $startTime = Carbon::now()->addDays(rand(0, 6))->setHour(rand(9, 16))->setMinutes(collect([0, 30])->random());
            $endTime = $startTime->copy()->addMinutes($service->duration_minutes);

            Reservations::create([
                'customer_name' => 'Pelanggan ' . ($i + 1),
                'customer_email' => 'customer' . ($i + 1) . '@example.com',
                'customer_phone' => '0812' . rand(10000000, 99999999),
                'service_id' => $service->id,
                'barber_id' => $barber->id,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'total_price' => $service->price,
                'status' => collect(['scheduled', 'completed', 'cancelled'])->random(),
            ]);
        }
    }
}