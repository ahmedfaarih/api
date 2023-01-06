<?php

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $status = $this->faker->randomElement(['on-going','pending', 'done']);
        return [
            'name' => fake()->name(),
            'status' => fake()->name($status),
            'priority' => fake()->name(),
            'file_path' => fake()->name(),
            'price' => $this-> faker->randomFloat(2, 0, 10000),
        ];
    }
}
