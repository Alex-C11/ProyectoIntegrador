<?php

namespace Database\Factories;

use App\Models\People;
use App\Models\Period;
use App\Models\Stand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Associate>
 */
class AssociateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'people_id'=>People::all()->random()->id,
            'code'=>$this->faker->randomDigit(4),
            'type'=>$this->faker->randomElement(['activo','inactivo']),
            'status'=>$this->faker->randomElement(['presidente','secretario','tesorera','vocal']),
            'stand_id'=>Stand::all()->random()->id,
            'period_id'=>Period::all()->random()->id,
        ];
    }
}
