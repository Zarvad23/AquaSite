<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @param RegisterRequest $registerRequest
     * @return void
     */
    public function registration(RegisterRequest $registerRequest)
    {
//        $user = Users::create($registerRequest->validated());
        return Users::create([
                'password' => Hash::make($registerRequest->password)
            ] + $registerRequest->only(['login', 'name','surname', 'date', 'gender']));
    }
    public function login (LoginRequest $loginRequest) {
        $user = Users::where('login', $loginRequest->login)->first();

        if($user && Hash::check($loginRequest->password, $user->password)){
            $user->generateToken();

            return [
                'token' => $user->remember_token,
                'username' => $user->name,
            ];
        }

        return response()->json([
            'message' => 'Autentification failed',
            'errors' =>[
                'login' => 'Проверьте првильность введенных данных',
            ],
        ], 400);
    }
}
