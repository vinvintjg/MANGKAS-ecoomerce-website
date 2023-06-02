<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $factory->define(App\Models\User::class, function (Faker $faker) {
            return [
                'name' => $faker->name,
                'phone' => $faker->unique()->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'user',
                'remember_token' => Str::random(10),
            ];
        });

        $users = factory(App\Models\User::class, 10)->create();
    }
}
