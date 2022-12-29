<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ConsignmentSeeder::class,
            PortSeeder::class,
            ShipmentSeeder::class,
            TermSeeder::class,
            AfrequestSeeder::class,
            QuotationSeeder::class,
            JobSeeder::class,
            QuotationJobSeeder::class,
            SubJobSeeder::class,
        ]);
    }
}
