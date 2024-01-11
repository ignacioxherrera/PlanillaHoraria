<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nro' => $this->faker->unique()->randomNumber(3),
            'laboratorio' => $this->faker->boolean(),
            'fecha_creacion' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fecha_modificacion' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
