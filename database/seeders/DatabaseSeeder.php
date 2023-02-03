<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Hilo;
use App\Models\Respuesta;
use App\Models\Subforo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
/*
        Subforo::factory(10)
            ->has(
                Categoria::factory(2)
            )
            ->has(
                Hilo::factory()
            )
            ->create();
*/

        Subforo::fill();












    }
}
