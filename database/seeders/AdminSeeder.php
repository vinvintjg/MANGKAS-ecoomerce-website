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
            'phone' => '8456123789',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'pensil',
            'phone' => '7087878111',
            'email' => 'pensil@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pensil'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'vincent',
            'phone' => '6087878123',
            'email' => 'vincent@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vincent'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'vincent1',
            'phone' => '5087878123',
            'email' => 'vincent1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vincent1'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'vincent2',
            'phone' => '4087878123',
            'email' => 'vincent2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vincent2'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'vincent3',
            'phone' => '3087878123',
            'email' => 'vincent3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vincent3'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'staff2',
            'phone' => '2213456543',
            'email' => 'staff2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('staff2'),
            'role' => 'staff',
        ]);

        User::create([
            'name' => 'staff3',
            'phone' => '1213456543',
            'email' => 'staff3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('staff3'),
            'role' => 'staff',
        ]);
    }
}
