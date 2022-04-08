<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function dashboard(){
        $countUsers = User::orderBy('id','DESC')->count();
        $countPosts = Post::orderBy('id','DESC')->count();
        return view('admin.dashboard', ['dataUser' => $countUsers, 'dataPost' => $countPosts]);
    }
}
