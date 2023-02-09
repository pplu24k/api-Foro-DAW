<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
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
            'hilo_id' => \App\Models\Hilo::all()->random()->id


        ];
    }
}
