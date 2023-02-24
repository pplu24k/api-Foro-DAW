<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends User
{
    public function mostrarPerfil($nick){


        $usuario = User::where('nick',$nick)
        ->get()[0];


        return json_encode($usuario);





    }

    public function establecerAvatar($nick, Request $request){

/*
        $request->validate([
            'file' => 'required|image|max:4096'
        ]);*/


        $ruta = explode('/',$request->file('file')->store('public/imagenes'));
        $archivo = $ruta[count($ruta)-1];

        User::where('nick',$nick)->update(['avatar'=>$archivo]);


        return $archivo;



    }
}
