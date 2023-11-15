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
            'name' => 'carousell-1.jpg',
            'image' => 'carousell-images/carousell-1.jpg',
            'text' => 'Ahli Listrik Terampil Siap Membantu Anda',
        ]);

        Carousell::create([
            'name' => 'carousell-2.jpg',
            'image' => 'carousell-images/carousell-2.jpg',
            'text' => 'Keandalan dan Kepuasan Pelanggan Prioritas Kami'
        ]);

        Carousell::create([
            'name' => 'carousell-3.jpg',
            'image' => 'carousell-images/carousell-3.jpg',
            'text' => 'Perbaikan Profesional dengan Standar Keselamatan Tinggi',
        ]);
    }
}