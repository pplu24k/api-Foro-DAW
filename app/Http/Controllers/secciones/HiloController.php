<?php

namespace App\Http\Controllers\secciones;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Hilo;
use App\Models\Respuesta;
use App\Models\Subforo;
use App\Models\User;
use Illuminate\Http\Request;

class HiloController extends Controller
{
    public function mostrarHilo($slugs, $slugc,$id){

        $contenidoHilo = [];

        $subforo = Subforo::where('slug', $slugs)->get()[0];


        $categoria = Categoria::where('subforo_id',$subforo->id)
                ->where('slug',$slugc)
                ->get()[0];

        $hilo = Hilo::where('categoria_id', $categoria->id)
            ->where('id',$id)
            ->get()[0];

        $comentarios = Comentario::where('hilo_id',$hilo->id)->get();



            foreach ($comentarios as $comentario)
            {



            $respuestasArray = [];
            $respuestas = Respuesta::where('comentario_id', $comentario->id)->get();

            foreach ($respuestas as $respuesta) {

                $usuarioR = User::where('id', $respuesta->usuario_id)->get();

                array_push($respuestasArray,[

                    'nick' => $usuarioR->nick,
                    'respuesta' => $respuesta

                ]);

            }

            array_push($contenidoHilo, [
                'comentario' => $comentario,
                'respuestas' => $respuestasArray
            ]);


            }


        return response(json_encode(
            [

                'hilo' => $hilo,
                'contenido' => $contenidoHilo

            ]
        ));


    }
}
