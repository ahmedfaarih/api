<?php

namespace Database\Seeders;

use App\Models\QuotationJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotationJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuotationJob::factory()
        ->count(10)
        ->create();
    }
}
