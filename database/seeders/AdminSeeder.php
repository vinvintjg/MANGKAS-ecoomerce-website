<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'phone' => '123456789',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Staff',
            'phone' => '987654321',
            'email' => 'staff@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('staff'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'User',
            'phone' => '456123789',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);
    }
}
