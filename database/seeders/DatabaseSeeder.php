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
            ConsignmentSeeder::class,
            PortSeeder::class,
            ShipmentSeeder::class,
            TermSeeder::class,
            AfrequestSeeder::class,
        ]);
    }
}
