<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formateur>
 */
class FormateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom' => $this->faker->name,
            'cin' => strtoupper(Str::random(8)),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Use bcrypt to hash the password
    
        ];
    }
}
