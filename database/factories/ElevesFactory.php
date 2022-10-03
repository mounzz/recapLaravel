<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\eleves>
 */
class ElevesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'nom' => $this->faker->lastName,
                'prenom' => $this->faker->firstName,
                'age' => $this->faker->numberBetween($min = 15, $max = 75),
                'etat' => $this->faker->boolean($chanceOfGettingTrue = 50),

        ];
    }
}
