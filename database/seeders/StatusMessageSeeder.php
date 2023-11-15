<?php

namespace Database\Seeders;

use App\Models\Status_message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status_message::create([
            'name' => 'Unread'
        ]);

        Status_message::create([
            'name' => 'Read'
        ]);

        Status_message::create([
            'name' => 'Progress'
        ]);

        Status_message::create([
            'name' => 'Fixed'
        ]);
    }
}