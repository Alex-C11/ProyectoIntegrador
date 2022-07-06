<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Associate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assistence>
 */
class AssistenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();

        return [

            'status'=>$this->faker->randomElement(['asistio','tarde','falta']),
            'associate_id'=>Associate::all()->random()->id,
            'activity_id'=>Activity::all()->random()->id,
        ];
    }
}
