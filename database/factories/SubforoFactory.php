<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subforo>
 */
class SubforoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $subforo = fake()->unique()->name();

        return [

            'nombre' => $subforo,
            'slug' => str_slug($subforo),

        ];
    }
}
