<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->randomNumber(8),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contrasenia' => $this->faker->password(),
            'tipo' => $this->faker->randomElement(['alumno', 'docente', 'admin', 'visitante']),
            'fecha_creacion' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fecha_modificacion' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
