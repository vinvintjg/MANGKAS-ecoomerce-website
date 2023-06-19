<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Haircut;

class HaircutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Haircut::create([
            'id' => 1,
            'haircut_name' => 'Crop Cut',
            'haircut_logo' => 'Crop Cut_photo.png',
            'shop_id' => 9,
        ]);

        Haircut::create([
            'id' => 2,
            'haircut_name' => 'Comma Hair',
            'haircut_logo' => 'Comma Hair_photo.png',
            'shop_id' => 9,
        ]);

        Haircut::create([
            'id' => 3,
            'haircut_name' => 'Two Block',
            'haircut_logo' => 'Two Block_photo.png',
            'shop_id' => 9,
        ]);

        Haircut::create([
            'id' => 4,
            'haircut_name' => 'Crop Cut',
            'haircut_logo' => 'Crop Cut_photo.png',
            'shop_id' => 2,
        ]);

        Haircut::create([
            'id' => 5,
            'haircut_name' => 'Comma Hair',
            'haircut_logo' => 'Comma Hair_photo.png',
            'shop_id' => 2,
        ]);

        Haircut::create([
            'id' => 6,
            'haircut_name' => 'Two Block',
            'haircut_logo' => 'Two Block_photo.png',
            'shop_id' => 2,
        ]);

        Haircut::create([
            'id' => 7,
            'haircut_name' => 'Crop Cut',
            'haircut_logo' => 'Crop Cut_photo.png',
            'shop_id' => 10,
        ]);

        Haircut::create([
            'id' => 8,
            'haircut_name' => 'Comma Hair',
            'haircut_logo' => 'Comma Hair_photo.png',
            'shop_id' => 10,
        ]);

        Haircut::create([
            'id' => 9,
            'haircut_name' => 'Two Block',
            'haircut_logo' => 'Two Block_photo.png',
            'shop_id' => 10,
        ]);
    }
}
