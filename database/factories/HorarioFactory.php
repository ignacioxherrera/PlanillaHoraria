<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inicio' => $this->faker->dateTimeBetween('19:20:00', '21:20:00')->format('H:i'),
            'fin' => $this->faker->dateTimeBetween('21:30:00', '23:30:00')->format('H:i'),
            'dia' => $this->faker->randomElement(["lunes", "martes", "miercoles", "jueves", "viernes"]),
            'fecha_creacion' => $this->faker->dateTime(),
            'fecha_modificacion' => $this->faker->dateTime(),
        ];
    }
}
