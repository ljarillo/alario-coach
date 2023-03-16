<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => fake()->numberBetween(1, 20),
            'start' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'end' => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
