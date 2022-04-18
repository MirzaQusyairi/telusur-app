<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
         if(auth()->user()->role !== 'administrator'){
            abort(403);
        }

        $countUsers = User::orderBy('id','DESC')->count();
        $countPosts = Post::orderBy('id','DESC')->count();
        return view('admin.dashboard', ['dataUser' => $countUsers, 'dataPost' => $countPosts]);
    }

}
