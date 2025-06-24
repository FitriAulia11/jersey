<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // ganti jika perlu
            'role' => 'admin', // pastikan tabel users punya kolom 'role'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
