<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Assistence;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'amount'=>$this->faker->randomNumber(),
            'activity_id'=>Activity::all()->random()->id,
            'assistence_id'=>Assistence::all()->random()->id,

        ];
    }
}
