<?php

namespace Database\Seeders;

use App\Models\Barbers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barbers = [
            [
                'name' => 'Andi "The Blade" Saputra',
                'phone' => '081234567890',
                'status' => 'active',
            ],
            [
                'name' => 'Budi "Scissorhands" Santoso',
                'phone' => '081209876543',
                'status' => 'active',
            ],
            [
                'name' => 'Charlie "Clipper" Wijaya',
                'phone' => '081211223344',
                'status' => 'active',
            ],
            [
                'name' => 'Dodi "The Fade" Hidayat',
                'phone' => '081255667788',
                'status' => 'inactive',
            ],
        ];

        foreach ($barbers as $barber) {
            Barbers::firstOrCreate(['name' => $barber['name']], $barber);
        }
    }
}
