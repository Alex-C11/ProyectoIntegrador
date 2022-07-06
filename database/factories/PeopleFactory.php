<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name=$this->faker->unique()->name(60);

        return [

            'name'=>$name,
            'fatherlastname'=>$this->faker->lastName,
            'motherlastname'=>$this->faker->lastName,
            'dni'=>$this->faker->randomNumber(8),
            'birtdate'=>$this->faker->date,
            'maricalstaus'=>$this->faker->randomElement(['Casado','soltero','Viudo','Divorsiado']),
            'sexo'=>$this->faker->randomElement(['Masculino','Femenino']),
            'phone'=>$this->faker->unique->phoneNumber(9),
            'email' => $this->faker->unique()->email(),
            'address'=>$this->faker->address(),


        ];
    }
}
