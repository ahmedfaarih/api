<?php

namespace Database\Seeders;

use App\Models\Afrequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AfrequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Afrequest::factory()
        ->count(10)
        ->create();
    }
}
