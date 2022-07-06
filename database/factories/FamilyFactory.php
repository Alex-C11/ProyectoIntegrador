<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\People;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'dni' => $this->faker->numerify('########'),
            'relation' => $this->faker->text,
            'people_id'=>People::all()->random()->id,

        ];
    }
}
