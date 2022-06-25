<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
            //'password' => 'required|min:8|regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).+$/',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()
            ], 422);
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            "role" => 'public'
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Register user success!'
        ], 201);
    }

    public function login(Request $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => false,
                'message' => 'Wrong email/password'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Login success!',
            'data' => [
                'id' => $user->id,
                'nama' => $user->name,
                'role' => $user->role,
                'token' => $token,
            ]
        ], 200);
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'status' => true,
                'message' => 'Logout success!'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error logout, please try again!',
                'errors' => $e->getMessage()
            ], 422);
        }
    }

    public function profile()
    {
        try {
            $data =  User::find(auth()->user()->id);
            return response()->json([
                'status' => true,
                'message' => 'User successfully fetched!',
                'data' => $data
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error,contact administrator!',
                'errors' => $e->getMessage()
            ], 400);
        }
    }

    // public function profile(Request $request){
    //     return $request->user();
    // }
}