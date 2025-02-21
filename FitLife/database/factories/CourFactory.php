<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cour>
 */
class CourFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Football', 'Basketball', 'Tennis', 'Natation', 'Cyclisme',
                'Musculation', 'Yoga', 'Boxe', 'Athlétisme', 'Volley-ball'
            ]),
        ];
    }
}
