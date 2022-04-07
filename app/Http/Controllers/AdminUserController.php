<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(){
        $data = User::orderBy('id','DESC')->get();
        return view('admin.user.index', ['data' => $data]);
    }

    public function create_view(){
        return view('admin.user.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/users')->with('success', 'Create User Successfull!');
    }
}
