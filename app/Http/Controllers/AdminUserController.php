<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index(){
        $data = User::orderBy('id','DESC')->get();
        return view('admin.user.index', ['data' => $data]);
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/users')->with('success', 'Create User Successfull!');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'role' => 'required'
        ];

        $passTemp = Hash::make($request->password);

        if($passTemp != $user->password){
            $rules['password'] = 'required|min:5|max:255';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/admin/users')->with('success', 'User has been updated');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Comment::where('user_id',$id)->delete();

        return redirect('/admin/users')->with('success', 'User has been deleted');
    }
}
