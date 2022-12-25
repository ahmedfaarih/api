<?php

namespace Database\Factories;

use App\Models\Consignment;
use App\Models\Port;
use App\Models\Shipment;
use App\Models\Term;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Afrequest>
 */
class AfrequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'port_id_ld' => $this->faker->randomElement(Port::pluck('id')),
            'port_id_dc' => $this->faker->randomElement(Port::pluck('id')),
            'weight' => $this-> faker->randomFloat(2, 0, 10000),
            'volume' => $this-> faker->randomFloat(2, 0, 10000),
            'commodity' => fake()->name(),
            'remarks' => fake()->sentence(2, true),
            'terms_id' => $this->faker->randomElement(Term::pluck('id')),
            'shipper_id' => $this->faker->randomElement(Shipment::pluck('id')),
            'consignee_id' => $this->faker->randomElement(Consignment::pluck('id'))
        ];
    }
}
