<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('homepage.register'); 
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|regex:/^(?=.[a-z])(?=.[A-Z])(?=.*\d).+$/',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
        
        $validatedData['role'] = 'public';
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Create User Successfull!');
    }
}
