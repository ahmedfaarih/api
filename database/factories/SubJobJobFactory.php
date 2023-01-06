<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\SubJob;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubJobJob>
 */
class SubJobJobFactory extends Factory
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
            'sub_job_id' => $this->faker->randomElement(SubJob::pluck('id')),
        ];
    }
}
