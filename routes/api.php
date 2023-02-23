<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\secciones\CategoriaController;
use App\Http\Controllers\secciones\HiloController;
use App\Http\Controllers\secciones\SubforoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::controller(AuthController::class)->group(function () {
	Route::post('/auth/register', 'register');
    Route::post('/auth/login', 'login');
/*
    Route::middleware([EnsureTokenIsValid::class])->group(function () {
        Route::get('/', function () {
            //
        });

        Route::get('/profile', function () {
            //
        })->withoutMiddleware([EnsureTokenIsValid::class]);
    });
*/

});

Route::get('/subforos',[SubforoController::class,'index']);
Route::get('/subforos/{slug}',[CategoriaController::class,'index']);
Route::get('/subforos/{slugs}/{slugc}',[CategoriaController::class,'mostrarCategoria']);
Route::get('/subforos/{slugs}/{slugc}/{id}',[HiloController::class,'mostrarHilo']);
