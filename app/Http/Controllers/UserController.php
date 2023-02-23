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
}
