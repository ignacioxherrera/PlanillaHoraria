<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comision>
 */
class ComisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'anio' => $this->faker->numberBetween(1, 3),
            'division' => $this->faker->numberBetween(1, 3),
            'carrera' => $this->faker->randomElement(['DS', 'ITI', 'AF']),
            'fecha_creacion' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fecha_modificacion' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
