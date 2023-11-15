<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'admin',
            'username' => 'admin',
            'no_telp' => '081234567890',
            'address' => 'Jl. Jalan Jalan No. 123',
            'email' => 'LJjP3@example.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('admin')
        ]);
    }
}
