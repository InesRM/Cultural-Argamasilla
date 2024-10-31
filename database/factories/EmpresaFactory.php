<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> 'Empresa . '. $this->faker->text($maxNbChars = 10) . 'S.L.',
            'direccion' => $this->faker->streetAddress,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'web' => "webempresa",
            'informacionExtra' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
