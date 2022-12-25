<?php

namespace Database\Seeders;

use App\Models\Consignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consignment::factory()
        ->count(10)
        ->create();
    }
}
