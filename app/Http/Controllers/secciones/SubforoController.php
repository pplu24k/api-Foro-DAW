<?php

namespace App\Http\Controllers\secciones;

use App\Http\Controllers\Controller;
use App\Models\Subforo;
use Illuminate\Http\Request;

class SubforoController extends Controller
{
    public function index(){


        return response(json_encode(Subforo::all()));

    }
}
