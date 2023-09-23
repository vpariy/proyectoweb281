<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $tipo = ['presencial', 'virtual', 'ambos'];

        return [
            'nombre'        => fake()->sentence(4),
            'tipo'          => fake()->randomElement($tipo),
            'descripcion'   => fake()->text('50'),
            'f_creacion'    => fake()->date(),
            'f_evento'      => fake()->date(),
            'direccion'     => fake()->address('50'),
            'ubicacion'     => fake()->url('50'),
            'link'          => fake()->url('50'),
            'id_usuario'    => Usuario::all()->random()->id_usuario,

        ];
    }
}
