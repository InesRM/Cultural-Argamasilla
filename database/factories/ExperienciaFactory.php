<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiencia>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'nombre' => fake()->sentence(3),
                'fechaInicio' => fake()->dateTimeBetween('-2 weeks', '+20 week'),
                'fechaFin' => fake()->randomElement(['4 semanas', '3 días', '1 mes', '5 días', '1 semana', '2 días', '2 semanas']),
                'descripcionCorta' => fake()->sentence(10),
                'descripcionLarga' => fake()->sentence(20),
                'precio' => fake()->randomFloat(2, 9, 99),
                'imagen' => fake()->randomElement(['exp1.jpg', 'exp2.jpg', 'exp3.jpg', 'exp4.jpg', 'exp5.webp']),
                'empresa_id' => fake()->numberBetween(1, 20),

        ];
    }
}
