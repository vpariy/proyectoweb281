<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'        => fake()->sentence(4),
            'autor'         => fake()->name(),
            'resumen'       => fake()->text('200'),

            'id_usuario'    => Usuario::all()->random()->id_usuario,
        ];
    }
}
