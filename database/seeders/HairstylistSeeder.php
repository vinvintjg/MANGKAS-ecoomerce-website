<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hairstylist;
use Illuminate\Support\Facades\Hash;

class HairstylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Hairstylist::create([
            'id' => 1,
            'hairstylist_name' => 'Neil Simson',
            'hairstylist_logo' => 'Neil Simson_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.00,
            'hairstylist_review' => 45,
            'shop_id' => 10,
        ]);

        Hairstylist::create([
            'id' => 2,
            'hairstylist_name' => 'Michael Gough',
            'hairstylist_logo' => 'Michael Gough_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.20,
            'hairstylist_review' => 20,
            'shop_id' => 10,
        ]);

        Hairstylist::create([
            'id' => 3,
            'hairstylist_name' => 'Bonnie Green',
            'hairstylist_logo' => 'Bonnie Green_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.80,
            'hairstylist_review' => 12,
            'shop_id' => 10,
        ]);

        Hairstylist::create([
            'id' => 4,
            'hairstylist_name' => 'Boy Green',
            'hairstylist_logo' => 'Boy Green_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.70,
            'hairstylist_review' => 123,
            'shop_id' => 9,
        ]);

        Hairstylist::create([
            'id' => 5,
            'hairstylist_name' => 'Thom Steel',
            'hairstylist_logo' => 'Thom Steel_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.20,
            'hairstylist_review' => 201,
            'shop_id' => 9,
        ]);

        Hairstylist::create([
            'id' => 6,
            'hairstylist_name' => 'Carol Miya',
            'hairstylist_logo' => 'Carol Miya_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.80,
            'hairstylist_review' => 55,
            'shop_id' => 9,
        ]);

        Hairstylist::create([
            'id' => 7,
            'hairstylist_name' => 'Asom Man',
            'hairstylist_logo' => 'Asom Man_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.30,
            'hairstylist_review' => 57,
            'shop_id' => 2,
        ]);

        Hairstylist::create([
            'id' => 8,
            'hairstylist_name' => 'Samule Joy',
            'hairstylist_logo' => 'Samule Joy_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.70,
            'hairstylist_review' => 12,
            'shop_id' => 2,
        ]);

        Hairstylist::create([
            'id' => 9,
            'hairstylist_name' => 'Phete Le',
            'hairstylist_logo' => 'Phete Le_photo.png',
            'hairstylist_description' => 'Lörem ipsum joment fynålungen medan spedat äggkonto. Fatönade sasamma, alltså döjäning kovis diliga.',
            'hairstylist_rate' => 4.80,
            'hairstylist_review' => 30,
            'shop_id' => 2,
        ]);
    }
}
