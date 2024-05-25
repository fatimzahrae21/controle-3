<?php

namespace Database\Factories;

use App\Models\Auteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $auteurIds = Auteur::pluck('id')->toArray();
        return [
            //
            'titre' => fake()->title(),
            'date_publication' => fake()->date(),
            'prix' => fake()->numberBetween(100,1000),
            'id_auteur' => fake()->randomElement($auteurIds)

        ];
    }
}
