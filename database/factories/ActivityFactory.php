<?php

namespace Database\Factories;

use App\Models\Association;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title,
            'description' => $this->faker->text,
            'datatime' => $this->faker->date(),
            'penalty' => $this->faker->text,
            'association_id'=>Association::all()->random()->id,

        ];
    }
}
