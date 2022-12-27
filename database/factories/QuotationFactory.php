<?php

namespace Database\Factories;

use App\Models\Afrequest;
use App\Models\Consignment;
use App\Models\Job;
use App\Models\Term;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotation>
 */
class QuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'af_request_id' => $this->faker->randomElement(Afrequest::pluck('id')),
            'job_id' => $this->faker->randomElement(Job::pluck('id')),
            'status'=> $this->faker->name(),
            'user_id' =>  $this->faker->randomElement(User::pluck('id')),
            'consignee_id'  => $this->faker->randomElement(Consignment::pluck('id')),
            'quotation_number'=>$this->faker->numberBetween(1,100),
            'sub_total' =>$this->faker->numberBetween(1,100),
            'discount_rate' => $this->faker->numberBetween(1,100),
            'gst' =>  $this->faker->numberBetween(1,10),
            'net_total' => $this->faker->numberBetween(1,100),
        ];
    }
}
