<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Respuesta>
 */
class RespuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'contenido' => fake()->realText(),
            'usuario_id' => \App\Models\User::all()->random()->id,
            'comentario_id' => \App\Models\Comentario::all()->random()->id
        ];
    }
}
