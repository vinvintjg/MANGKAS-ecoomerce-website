<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;
use Illuminate\Support\Facades\Hash;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Facility::create([
            'id' => 1,
            'facility_name' => 'Air Conditioner',
            'facility_logo' => 'Air Conditioner_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 2,
            'facility_name' => 'Waiting Room',
            'facility_logo' => 'Waiting Room_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 3,
            'facility_name' => 'Parking Lot',
            'facility_logo' => 'Parking Lot_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 4,
            'facility_name' => 'Kiddy Chair Haircut',
            'facility_logo' => 'Kiddy Chair Haircut_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 5,
            'facility_name' => 'Free wifi',
            'facility_logo' => 'Free wifi_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 6,
            'facility_name' => 'Massage Chair',
            'facility_logo' => 'Massage Chair_photo.png',
            'shop_id' => 2,
        ]);

        Facility::create([
            'id' => 7,
            'facility_name' => 'Parking Lot',
            'facility_logo' => 'Parking Lot_photo.png',
            'shop_id' => 9,
        ]);

        Facility::create([
            'id' => 8,
            'facility_name' => 'Free wifi',
            'facility_logo' => 'Free wifi_photo.png',
            'shop_id' => 9,
        ]);

        Facility::create([
            'id' => 9,
            'facility_name' => 'Waiting Room',
            'facility_logo' => 'Waiting Room_photo.png',
            'shop_id' => 9,
        ]);

        Facility::create([
            'id' => 10,
            'facility_name' => 'Air Conditioner',
            'facility_logo' => 'Air Conditioner_photo.png',
            'shop_id' => 10,
        ]);

        Facility::create([
            'id' => 11,
            'facility_name' => 'Parking Lot',
            'facility_logo' => 'Parking Lot_photo.png',
            'shop_id' => 10,
        ]);

        Facility::create([
            'id' => 12,
            'facility_name' => 'Kiddy Chair Haircut',
            'facility_logo' => 'Kiddy Chair Haircut_photo.png',
            'shop_id' => 10,
        ]);
    }
}
