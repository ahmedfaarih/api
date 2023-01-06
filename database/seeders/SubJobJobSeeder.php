<?php

namespace Database\Seeders;

use App\Models\SubJobJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubJobJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubJobJob::factory()
        ->count(10)
        ->create();
    }
    
}
