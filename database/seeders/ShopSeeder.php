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
            'shop_photo_2' => 'Classic Cuts_photo_1.png',
            'shop_photo_3' => 'Classic Cuts_photo_1.png',
            'shop_photo_4' => 'Classic Cuts_photo_1.png',
            'shop_price_low' => 65000,
            'shop_price_high' => 80000,
            'shop_rate' => 4.50,
            'shop_location' => 'Jakarta Utara',
            'shop_description' => 'Classic Cuts Barber Shop, where timeless style meets exceptional grooming. Our barbers are dedicated experts, delivering traditional and contemporary haircuts with precision and skill. Immerse yourself in our inviting ambiance, a blend of vintage charm and modern comfort. Experience the art of shaving and beard care with premium products for a refined look. Our commitment to customer satisfaction ensures you leave feeling confident and polished. Embrace the classic gentleman touch with Classic Cuts Barber Shop - your destination for top-tier grooming and a touch of old-world elegance.',
            'shop_address' => 'Jalan Pluit Timur Blok I 24 Jakarta Utara Daerah Khusus Ibukota Jakarta.',
            'shopid' => 2,
        ]);

        Shop::create([
            'id' => 9,
            'shop_name' => 'Sharp & Suave',
            'shop_photo_1' => 'Sharp & Suave_photo_1.png',
            'shop_photo_2' => 'Sharp & Suave_photo_1.png',
            'shop_photo_3' => 'Sharp & Suave_photo_1.png',
            'shop_photo_4' => 'Sharp & Suave_photo_1.png',
            'shop_price_low' => 55000,
            'shop_price_high' => 80000,
            'shop_rate' => 4.50,
            'shop_location' => 'Jakarta Timur',
            'shop_description' => 'Sharp & Suave is a Barber Shop that offers the best mens grooming experience with a modern and elegant touch. Our shop brings talented barbers who excel in the latest haircuts and beard care. With a comfortable atmosphere and top-notch services, we provide unmatched customer satisfaction. Enjoy precision haircuts and soothing treatments with high-quality products. Whether you seek a classic gentleman look or a contemporary style, Sharp & Suave Barber Shop is the ultimate choice for a masculine and classy appearance.',
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
            'shop_description' => 'Unique Barber, where innovation meets artistry in men grooming. Our barber shop is a haven for individuals seeking personalized and distinctive styles that match their unique personalities. Our team of skilled barbers is passionate about crafting one-of-a-kind haircuts and grooming experiences tailored to each client. Embrace the latest trends or create your own signature look with confidence. We pride ourselves on using premium products and techniques that elevate your grooming experience. Step into a world of creativity and excellence at Unique Barber, where we redefine the art of men grooming with flair and originality.',
            'shop_address' => 'Jl. Kemanggisan Raya No.20, RT.1/RW.7, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480',
            'shopid' => 10,
        ]);
    }
}
