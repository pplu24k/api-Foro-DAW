<?php

namespace Database\Factories;

use App\Models\Subforo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $categoria = fake()->unique()->name();

        return [
            'nombre' => $categoria,
            'slug' => str_slug($categoria),
            'subforo_id' => Subforo::factory()
        ];
    }
}
