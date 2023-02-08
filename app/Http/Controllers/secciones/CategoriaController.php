<?php

namespace App\Http\Controllers\secciones;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Hilo;
use App\Models\Subforo;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index($slug){

        $subforo = Subforo::where('slug', $slug)->get()[0];



        $categorias = Categoria::where('subforo_id',$subforo->id)
               ->get();


        return response($categorias);



    }

    public function mostrarCategoria($slugs, $slugc){


        $subforo = Subforo::where('slug', $slugs)->get()[0];


        $categoria = Categoria::where('subforo_id',$subforo->id)
                ->where('slug',$slugc)
                ->get()[0];

        $hilos = Hilo::where('categoria_id', $categoria->id)
            ->get();


        return response(json_encode([

            'categoria' => $categoria,

            'hilos' => $hilos



        ]));


    }
}
