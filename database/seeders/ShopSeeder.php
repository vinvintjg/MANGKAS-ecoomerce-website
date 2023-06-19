<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use Illuminate\Support\Facades\Hash;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Shop::create([
            'id' => 2,
            'shop_name' => 'Classic Cuts',
            'shop_photo_1' => 'Classic Cuts_photo_1.png',
            'shop_photo_2' => 'Classic Cuts_photo_2.png',
            'shop_photo_3' => 'Classic Cuts_photo_3.png',
            'shop_photo_4' => 'Classic Cuts_photo_4.png',
            'shop_price_low' => 65000,
            'shop_price_high' => 80000,
            'shop_rate' => 4.50,
            'shop_location' => 'Jakarta Utara',
            'shop_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma,',
            'shop_address' => 'Jalan Pluit Timur Blok I 24 Jakarta Utara Daerah Khusus Ibukota Jakarta.',
            'shopid' => 2,
        ]);

        Shop::create([
            'id' => 9,
            'shop_name' => 'Sharp & Suave',
            'shop_photo_1' => 'Sharp & Suave_photo_1.png',
            'shop_photo_2' => 'Sharp & Suave_photo_2.png',
            'shop_photo_3' => 'Sharp & Suave_photo_3.png',
            'shop_photo_4' => 'Sharp & Suave_photo_4.png',
            'shop_price_low' => 55000,
            'shop_price_high' => 80000,
            'shop_rate' => 4.50,
            'shop_location' => 'Jakarta Timur',
            'shop_description' => 'lorem ipsum',
            'shop_address' => 'Jl. Manggis 13560 Jakarta Timur DKI Jakarta.',
            'shopid' => 9,
        ]);

        Shop::create([
            'id' => 10,
            'shop_name' => 'Unique Barber',
            'shop_photo_1' => 'Unique Barber_photo_1.png',
            'shop_photo_2' => 'Unique Barber_photo_1.png',
            'shop_photo_3' => 'Unique Barber_photo_1.png',
            'shop_photo_4' => 'Unique Barber_photo_1.png',
            'shop_price_low' => 65000,
            'shop_price_high' => 80000,
            'shop_rate' => 4.50,
            'shop_location' => 'Jakarta Barat',
            'shop_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma,',
            'shop_address' => 'Jl. Kemanggisan Raya No.20, RT.1/RW.7, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480',
            'shopid' => 10,
        ]);
    }
}
