<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Service::create([
            'id' => 1,
            'service_name' => 'Hair Style',
            'service_logo' => 'Hair Style_photo.png',
            'service_price' => 65000,
            'shop_id' => 2,
        ]);

        Service::create([
            'id' => 2,
            'service_name' => 'Beard Trim',
            'service_logo' => 'Beard Trim_photo.png',
            'service_price' => 20000,
            'shop_id' => 2,
        ]);

        Service::create([
            'id' => 3,
            'service_name' => 'Hair Spa',
            'service_logo' => 'Hair Spa_photo.png',
            'service_price' => 35000,
            'shop_id' => 2,
        ]);

        Service::create([
            'id' => 4,
            'service_name' => 'Hair Style',
            'service_logo' => 'Hair Style_photo.png',
            'service_price' => 55000,
            'shop_id' => 9,
        ]);

        Service::create([
            'id' => 5,
            'service_name' => 'Beard Trim',
            'service_logo' => 'Beard Trim_photo.png',
            'service_price' => 15000,
            'shop_id' => 9,
        ]);

        Service::create([
            'id' => 6,
            'service_name' => 'Hair Spa',
            'service_logo' => 'Hair Spa_photo.png',
            'service_price' => 20000,
            'shop_id' => 9,
        ]);

        Service::create([
            'id' => 7,
            'service_name' => 'Hair Style',
            'service_logo' => 'Hair Style_photo.png',
            'service_price' => 65000,
            'shop_id' => 10,
        ]);

        Service::create([
            'id' => 8,
            'service_name' => 'Beard Trim',
            'service_logo' => 'Beard Trim_photo.png',
            'service_price' => 25000,
            'shop_id' => 10,
        ]);

        Service::create([
            'id' => 9,
            'service_name' => 'Hair Spa',
            'service_logo' => 'Hair Spa_photo.png',
            'service_price' => 33000,
            'shop_id' => 10,
        ]);
    }
}
