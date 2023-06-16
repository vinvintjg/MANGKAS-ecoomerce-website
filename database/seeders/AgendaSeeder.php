<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Illuminate\Support\Facades\Hash;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Agenda::create([
        //     'id' => 1,
        //     'hairstylist_id' => 7,
        //     'date' => '2023-06-08',
        //     'hour' => '09:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:04:15',
        //     'updated_at' => '2023-06-07 23:42:33',
        // ]);

        // Agenda::create([
        //     'id' => 2,
        //     'hairstylist_id' => 7,
        //     'date' => '2023-06-08',
        //     'hour' => '12:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:04:26',
        //     'updated_at' => '2023-06-07 18:04:26',
        // ]);

        // Agenda::create([
        //     'id' => 3,
        //     'hairstylist_id' => 7,
        //     'date' => '2023-06-08',
        //     'hour' => '15:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:04:34',
        //     'updated_at' => '2023-06-07 18:04:34',
        // ]);

        // Agenda::create([
        //     'id' => 4,
        //     'hairstylist_id' => 7,
        //     'date' => '2023-06-08',
        //     'hour' => '17:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:04:47',
        //     'updated_at' => '2023-06-07 18:04:47',
        // ]);

        // Agenda::create([
        //     'id' => 5,
        //     'hairstylist_id' => 8,
        //     'date' => '2023-06-08',
        //     'hour' => '17:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:04:53',
        //     'updated_at' => '2023-06-07 18:04:53',
        // ]);

        // Agenda::create([
        //     'id' => 6,
        //     'hairstylist_id' => 8,
        //     'date' => '2023-06-08',
        //     'hour' => '13:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:01',
        //     'updated_at' => '2023-06-07 18:05:01',
        // ]);

        // Agenda::create([
        //     'id' => 7,
        //     'hairstylist_id' => 9,
        //     'date' => '2023-06-09',
        //     'hour' => '10:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:13',
        //     'updated_at' => '2023-06-07 18:05:13',
        // ]);

        // Agenda::create([
        //     'id' => 8,
        //     'hairstylist_id' => 9,
        //     'date' => '2023-06-09',
        //     'hour' => '13:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:21',
        //     'updated_at' => '2023-06-07 18:05:21',
        // ]);

        // Agenda::create([
        //     'id' => 9,
        //     'hairstylist_id' => 9,
        //     'date' => '2023-06-09',
        //     'hour' => '15:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:32',
        //     'updated_at' => '2023-06-07 18:05:32',
        // ]);

        // Agenda::create([
        //     'id' => 10,
        //     'hairstylist_id' => 10,
        //     'date' => '2023-06-10',
        //     'hour' => '09:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:40',
        //     'updated_at' => '2023-06-07 18:05:40',
        // ]);

        // Agenda::create([
        //     'id' => 11,
        //     'hairstylist_id' => 10,
        //     'date' => '2023-06-10',
        //     'hour' => '12:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:05:50',
        //     'updated_at' => '2023-06-07 18:05:50',
        // ]);

        // Agenda::create([
        //     'id' => 12,
        //     'hairstylist_id' => 10,
        //     'date' => '2023-06-10',
        //     'hour' => '15:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:03',
        //     'updated_at' => '2023-06-07 18:06:03',
        // ]);

        // Agenda::create([
        //     'id' => 13,
        //     'hairstylist_id' => 11,
        //     'date' => '2023-06-11',
        //     'hour' => '10:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:12',
        //     'updated_at' => '2023-06-07 18:06:12',
        // ]);

        // Agenda::create([
        //     'id' => 14,
        //     'hairstylist_id' => 11,
        //     'date' => '2023-06-11',
        //     'hour' => '13:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:22',
        //     'updated_at' => '2023-06-07 18:06:22',
        // ]);

        // Agenda::create([
        //     'id' => 15,
        //     'hairstylist_id' => 11,
        //     'date' => '2023-06-11',
        //     'hour' => '16:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:32',
        //     'updated_at' => '2023-06-07 18:06:32',
        // ]);

        // Agenda::create([
        //     'id' => 16,
        //     'hairstylist_id' => 12,
        //     'date' => '2023-06-12',
        //     'hour' => '11:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:41',
        //     'updated_at' => '2023-06-07 18:06:41',
        // ]);

        // Agenda::create([
        //     'id' => 17,
        //     'hairstylist_id' => 12,
        //     'date' => '2023-06-12',
        //     'hour' => '14:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:06:50',
        //     'updated_at' => '2023-06-07 18:06:50',
        // ]);

        // Agenda::create([
        //     'id' => 18,
        //     'hairstylist_id' => 12,
        //     'date' => '2023-06-12',
        //     'hour' => '17:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:00',
        //     'updated_at' => '2023-06-07 18:07:00',
        // ]);

        // Agenda::create([
        //     'id' => 19,
        //     'hairstylist_id' => 13,
        //     'date' => '2023-06-13',
        //     'hour' => '12:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:11',
        //     'updated_at' => '2023-06-07 18:07:11',
        // ]);

        // Agenda::create([
        //     'id' => 20,
        //     'hairstylist_id' => 13,
        //     'date' => '2023-06-13',
        //     'hour' => '15:00:00',
        //     'status' => 'Unavailable',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:20',
        //     'updated_at' => '2023-06-07 18:07:20',
        // ]);

        // Agenda::create([
        //     'id' => 21,
        //     'hairstylist_id' => 13,
        //     'date' => '2023-06-13',
        //     'hour' => '18:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:30',
        //     'updated_at' => '2023-06-07 18:07:30',
        // ]);

        // Agenda::create([
        //     'id' => 22,
        //     'hairstylist_id' => 14,
        //     'date' => '2023-06-14',
        //     'hour' => '13:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:40',
        //     'updated_at' => '2023-06-07 18:07:40',
        // ]);

        // Agenda::create([
        //     'id' => 23,
        //     'hairstylist_id' => 14,
        //     'date' => '2023-06-14',
        //     'hour' => '16:00:00',
        //     'status' => 'Available',
        //     'shop_id' => 2,
        //     'created_at' => '2023-06-07 18:07:49',
        //     'updated_at' => '2023-06-07 18:07:49',
        // ]);
    }
}
