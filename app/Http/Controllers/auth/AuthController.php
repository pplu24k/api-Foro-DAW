<?php

namespace App\Http\Controllers\auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    public function register(Request $request)
        {
                $validator = Validator::make($request->all(), [
                'nick' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'nombre' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',

            ]);

            if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 400);
            }

            $user = User::create([
                'nick' => $request->get('nick'),
                'email' => $request->get('email'),
                'nombre' => $request->get('nombre'),
                'password' => Hash::make($request->get('password')),
            ]);

            $token = JWTAuth::fromUser($user);

            return response()->json(compact('user','token'),201);
        }
}
