<?php

namespace Database\Factories;

use App\Models\Associate;
use App\Models\Association;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Debit>
 */
class DebitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'type'=>$this->faker->randomElement(['Open','Exit']),
            'amount'=>$this->faker->randomNumber(),
            'description'=>$this->faker->text(200),
            'associate_id'=>Associate::all()->random()->id,
            'association_id'=>Association::all()->random()->id,


        ];
    }
}
