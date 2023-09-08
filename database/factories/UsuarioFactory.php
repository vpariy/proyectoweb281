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
            'nombres' => fake()->name(),
            'ap_paterno' => fake()->lastName(),
            'ap_materno' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '123456',
            'ci' => fake()->unique()->numberBetween(0, 99999),
            'fecha_nac' => fake()->date(),
            
        ];
    }
}
