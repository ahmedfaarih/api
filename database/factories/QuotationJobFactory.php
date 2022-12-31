<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuotationJobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_id' => $this->faker->randomElement(Job::pluck('id')),
            'quotation_id' => $this->faker->randomElement(Quotation::pluck('id')),
        ];
    }
}
