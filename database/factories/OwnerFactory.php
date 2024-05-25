<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carIds = Car::pluck('id')->toArray();
      
        return [
            //
            'nom' => $this->faker->lastName,
            'date_naissance' => $this->faker->date,
            'id_car' => fake()->randomElement($carIds )

        ];
    }
}
