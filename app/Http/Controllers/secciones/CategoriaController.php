<?php

namespace App\Http\Controllers\secciones;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Hilo;
use App\Models\Subforo;
use App\Models\User;
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

        $ret = [];

        $subforo = Subforo::where('slug', $slugs)->get()[0];


        $categoria = Categoria::where('subforo_id',$subforo->id)
                ->where('slug',$slugc)
                ->get()[0];

        $hilos = Hilo::where('categoria_id', $categoria->id)
            ->get();

            foreach ($hilos as $hilo)
            {

                $usuario = User::where('id', $hilo->usuario_id)->get();
            array_push($ret, [
                'hilo' => $hilo,
                'usuario' => $usuario
            ]);


            }





        return response(json_encode(
            [

                'categoria' => $categoria,
                'hilos' => $ret

            ]
        ));


    }
}
