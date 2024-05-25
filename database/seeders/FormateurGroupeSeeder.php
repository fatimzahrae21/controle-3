<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\Formateur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormateurGroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $formateurs = Formateur::factory(5)->create(); // Create 10 formateurs
        $groupes = Groupe::factory(5)->create(); // Create 5 groupes

        // Attach groupes to formateurs
        foreach ($formateurs as $formateur) {
            // Attach 1 to 3 groupes per formateur
            $formateur->groupes()->attach(
                $groupes->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
