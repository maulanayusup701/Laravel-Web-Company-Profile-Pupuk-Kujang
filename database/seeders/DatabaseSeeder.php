<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([InformationSeeder::class, ContactSeeder::class, CarousellSeeder::class, MessageSeeder::class]);
    }
}