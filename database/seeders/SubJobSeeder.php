<?php

namespace Database\Seeders;

use App\Models\SubJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubJob::factory()
        ->count(10)
        ->create();
    }
}
