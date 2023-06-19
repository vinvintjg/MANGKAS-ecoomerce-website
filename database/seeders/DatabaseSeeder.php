<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AdminSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(HairstylistSeeder::class);
        $this->call(HaircutSeeder::class);
        $this->call(BookingSeeder::class);
        $this->call(XAgendaSeeder::class);
    }
}
