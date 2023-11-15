<?php

namespace Database\Seeders;

use App\Models\Carousell;
use Illuminate\Database\Seeder;

class CarousellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carousell::create([
            'name' => 'carousell-1',
            'image' => 'carousell-images/carousell-1.webp',
            'text' => 'Ahli Listrik Terampil Siap Membantu Anda',
        ]);

        Carousell::create([
            'name' => 'carousell-2',
            'image' => 'carousell-images/carousell-2.webp',
            'text' => 'Keandalan dan Kepuasan Pelanggan Prioritas Kami'
        ]);

        Carousell::create([
            'name' => 'carousell-3',
            'image' => 'carousell-images/carousell-3.webp',
            'text' => 'Perbaikan Profesional dengan Standar Keselamatan Tinggi',
        ]);
    }
}