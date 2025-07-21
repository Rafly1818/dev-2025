<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Gentleman\'s Cut',
                'description' => 'Potongan rambut pria klasik, termasuk cuci dan pijat kepala.',
                'price' => 50000,
                'duration_minutes' => 45,
            ],
            [
                'name' => 'Beard Trim & Shave',
                'description' => 'Merapikan jenggot dan kumis dengan teknik hot towel shave.',
                'price' => 35000,
                'duration_minutes' => 30,
            ],
            [
                'name' => 'Hair Coloring',
                'description' => 'Pewarnaan rambut menggunakan produk premium.',
                'price' => 200000,
                'duration_minutes' => 90,
            ],
            [
                'name' => 'Kids Haircut',
                'description' => 'Potongan rambut khusus untuk anak-anak (di bawah 10 tahun).',
                'price' => 30000,
                'duration_minutes' => 30,
            ],
        ];

        foreach ($services as $service) {
            Services::firstOrCreate(['name' => $service['name']], $service);
        }
    }
}