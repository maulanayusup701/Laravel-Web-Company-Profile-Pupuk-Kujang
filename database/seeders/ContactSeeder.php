<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'email' => 'info@KujangTatarPersada-Cikampek.com',
            'no_telp' => '(0264) 838 6351',
            'running_hour' => "Senin-Kamis : 08.00-16.00 Wib\n
            Juma't : 08.00-16.30 Wib",
            'address' => 'Jl. Jend. A. Yani No. 39, Cikampek 41373, Karawang Jawa Barat.'
        ]);
    }
}