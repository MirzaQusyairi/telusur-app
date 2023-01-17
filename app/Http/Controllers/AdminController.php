<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        if(auth()->user()->role === 'public'){
            abort(403);
        }

        if(auth()->user()->role === 'administrator'){
            $countUsers = User::orderBy('id','DESC')->count();
            $countPosts = Post::orderBy('id','DESC')->count();
            return view('admin.dashboard', ['dataUser' => $countUsers, 'dataPost' => $countPosts]);
        } else {
            $countPosts = Post::where('user_id', auth()->user()->id)->orderBy('id','DESC')->count();
            return view('admin.dashboard', ['dataPost' => $countPosts]);
        }
    }

}
