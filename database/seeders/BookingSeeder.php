<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Booking::create([
        //     'id' => 1,
        //     'agenda_id' => 8,
        //     'user_id' => 5,
        //     'shop_id' => 2,
        //     'booking_service' => '[\"1\",\"2\"]',
        //     'booking_name' => 'Maya',
        //     'booking_phone' => '0216324627',
        //     'booking_gender' => 'boy',
        //     'booking_haircut' => '5',
        //     'booking_note' => 'carefuly',
        //     'booking_payment_total' => 85000,
        //     'booking_payment_method' => 'BCA',
        //     'booking_payment_photo' => '8_Mayapng',
        //     'created_at' => '2023-06-07 18:12:57',
        //     'updated_at' => '2023-06-07 18:12:57',
        // ]);

        // Booking::create([
        //     'id' => 2,
        //     'agenda_id' => 12,
        //     'user_id' => 5,
        //     'shop_id' => 9,
        //     'booking_service' => '[\"4\",\"6\"]',
        //     'booking_name' => 'vincent',
        //     'booking_phone' => '087878893469',
        //     'booking_gender' => 'boy',
        //     'booking_haircut' => '2',
        //     'booking_note' => 'no note',
        //     'booking_payment_total' => 75000,
        //     'booking_payment_method' => 'BCA',
        //     'booking_payment_photo' => '12_vincentpng',
        //     'created_at' => '2023-06-07 21:17:40',
        //     'updated_at' => '2023-06-07 21:17:40',
        // ]);

        // Booking::create([
        //     'id' => 5,
        //     'agenda_id' => 1,
        //     'user_id' => 2,
        //     'shop_id' => 2,
        //     'booking_service' => '[\"1\",\"3\"]',
        //     'booking_name' => 'Vincent',
        //     'booking_phone' => '0878733369',
        //     'booking_gender' => 'boy',
        //     'booking_haircut' => '5',
        //     'booking_note' => 'no note',
        //     'booking_payment_total' => 100000,
        //     'booking_payment_method' => 'BCA',
        //     'booking_payment_photo' => '1_Vincentpng',
        //     'created_at' => '2023-06-07 23:42:33',
        //     'updated_at' => '2023-06-07 23:42:33',
        // ]);
    }
}
