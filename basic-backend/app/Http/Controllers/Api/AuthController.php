<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated["name"],
            'password' => Hash::make($validated["password"]),
            'birthdate' => $validated["birthdate"],
        ]);

        return response()->json([
            "success" => true,
            "message" => "Register successfully",
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'string',
            ]
        ]);

        if (!Auth::attempt($validated)) {
            return response()->json([
                "success" => false,
                "message" => "Unauthorized"
            ]);
        }

        $user = Auth::user();

        $abilities = ['user'];
        if ($user->role === 'admin') {
            $abilities = ['user', 'admin'];
        }
        $token = $user->createToken('auth_token', $abilities)->plainTextToken;

        return response()->json([
            "success" => true,
            "message" => "Login successfully",
            "token" => $token,
            "abilities" => $abilities,
        ]);
    }
    function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response()->json([
            "success" => true,
            "message" => "Logout successfully"
        ], 200);
    }
}
