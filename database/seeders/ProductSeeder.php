<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'id' => 1,
            'product_name' => 'Styling Hairspray',
            'product_price' => 65000,
            'product_rate' => 5,
            'product_logo' => '_Hair Shampoo.png',
        ]);

        // Repeat the above code for the remaining rows with appropriate values for each row
        Product::create([
            'id' => 2,
            'product_name' => 'Hair Shampoo',
            'product_price' => 85000,
            'product_rate' => 5,
            'product_logo' => '_Styling Hairspray.png',
        ]);

        Product::create([
            'id' => 3,
            'product_name' => 'Perfume',
            'product_price' => 85000,
            'product_rate' => 4,
            'product_logo' => '_Perfume.png',
        ]);

        Product::create([
            'id' => 4,
            'product_name' => 'Hair Styling',
            'product_price' => 60000,
            'product_rate' => 4,
            'product_logo' => '_Hair Styling.png',
        ]);

        Product::create([
            'id' => 5,
            'product_name' => 'Face Wash',
            'product_price' => 65000,
            'product_rate' => 5,
            'product_logo' => '_Face Wash.png',
        ]);

        Product::create([
            'id' => 6,
            'product_name' => 'Hair Shampoo',
            'product_price' => 100000,
            'product_rate' => 5,
            'product_logo' => '_Hair Shampoo.png',
        ]);

        Product::create([
            'id' => 7,
            'product_name' => 'Face Wash',
            'product_price' => 65000,
            'product_rate' => 5,
            'product_logo' => '_Face Wash.png',
        ]);

        Product::create([
            'id' => 8,
            'product_name' => 'Styling Hairspray',
            'product_price' => 85000,
            'product_rate' => 4,
            'product_logo' => '_Styling Hairspray.png',
        ]);

        Product::create([
            'id' => 9,
            'product_name' => 'Perfume',
            'product_price' => 85000,
            'product_rate' => 5,
            'product_logo' => '_Perfume.png',
        ]);
    }
}
