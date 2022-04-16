<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //$posts = Post::all();
        $posts = Post::latest()->get();
        return view('post.index', ['posts' => $posts]); 
    }

    public function byAuthor(User $author){
        return view('post.index', ['posts' => $author->posts]); 
    }

    public function show(Post $post){
        return view('post.show', ['post' => $post]); 
    }
}
