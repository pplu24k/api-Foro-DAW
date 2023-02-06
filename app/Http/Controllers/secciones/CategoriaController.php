<?php

namespace App\Http\Controllers\secciones;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index($id){

        $categorias = Categoria::where('subforo_id',$id )
               ->take(10)
               ->get();


        return response($categorias);



    }
}
