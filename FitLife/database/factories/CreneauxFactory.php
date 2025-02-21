<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cour;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creneaux>
 */
class CreneauxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courIds = Cour::pluck('id')->toArray();
        return [
            'nb_place' => fake()->numberBetween(5, 30),
            'date_creneaux' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'hour_creneaux' => fake()->time('H:i', '22:00'),
            'cour_id' => count($courIds) ? fake()->randomElement($courIds) : Cour::factory()->create()->id,
        ];
    }
}
