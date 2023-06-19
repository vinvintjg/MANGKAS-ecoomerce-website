<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;

class XAgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        Agenda::create([
            'id' => 1,
            'hairstylist_id' => 1,
            'date' => '2023-06-08',
            'hour' => '09:00:00',
            'status' => 'Unavailable',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 2,
            'hairstylist_id' => 7,
            'date' => '2023-06-08',
            'hour' => '12:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 3,
            'hairstylist_id' => 7,
            'date' => '2023-06-08',
            'hour' => '15:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 4,
            'hairstylist_id' => 7,
            'date' => '2023-06-08',
            'hour' => '17:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 5,
            'hairstylist_id' => 8,
            'date' => '2023-06-08',
            'hour' => '17:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 6,
            'hairstylist_id' => 8,
            'date' => '2023-06-08',
            'hour' => '13:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 7,
            'hairstylist_id' => 9,
            'date' => '2023-06-09',
            'hour' => '10:00:00',
            'status' => 'Unavailable',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 8,
            'hairstylist_id' => 9,
            'date' => '2023-06-10',
            'hour' => '12:00:00',
            'status' => 'Unavailable',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 9,
            'hairstylist_id' => 9,
            'date' => '2023-06-10',
            'hour' => '16:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 10,
            'hairstylist_id' => 9,
            'date' => '2023-06-09',
            'hour' => '18:00:00',
            'status' => 'Available',
            'shop_id' => 2,
        ]);

        Agenda::create([
            'id' => 11,
            'hairstylist_id' => 4,
            'date' => '2023-06-08',
            'hour' => '09:00:00',
            'status' => 'Available',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 12,
            'hairstylist_id' => 4,
            'date' => '2023-06-09',
            'hour' => '09:00:00',
            'status' => 'Unavailable',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 13,
            'hairstylist_id' => 4,
            'date' => '2023-06-10',
            'hour' => '09:00:00',
            'status' => 'Available',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 14,
            'hairstylist_id' => 5,
            'date' => '2023-06-10',
            'hour' => '13:00:00',
            'status' => 'Available',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 15,
            'hairstylist_id' => 6,
            'date' => '2023-06-09',
            'hour' => '13:00:00',
            'status' => 'Unavailable',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 16,
            'hairstylist_id' => 5,
            'date' => '2023-06-09',
            'hour' => '17:00:00',
            'status' => 'Available',
            'shop_id' => 9,
        ]);

        Agenda::create([
            'id' => 17,
            'hairstylist_id' => 1,
            'date' => '2023-06-08',
            'hour' => '10:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 18,
            'hairstylist_id' => 1,
            'date' => '2023-06-09',
            'hour' => '10:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 19,
            'hairstylist_id' => 1,
            'date' => '2023-06-09',
            'hour' => '14:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 20,
            'hairstylist_id' => 2,
            'date' => '2023-06-09',
            'hour' => '14:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 21,
            'hairstylist_id' => 3,
            'date' => '2023-06-09',
            'hour' => '14:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 22,
            'hairstylist_id' => 2,
            'date' => '2023-06-09',
            'hour' => '14:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 23,
            'hairstylist_id' => 2,
            'date' => '2023-06-10',
            'hour' => '18:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

        Agenda::create([
            'id' => 24,
            'hairstylist_id' => 3,
            'date' => '2023-06-10',
            'hour' => '18:00:00',
            'status' => 'Available',
            'shop_id' => 10,
        ]);

    }
}
