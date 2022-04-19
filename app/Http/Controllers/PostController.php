<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index(){
    //     //$posts = Post::all();
    //     $posts = Post::latest()->get();
    //     return view('post.index', ['posts' => $posts]); 
    // }

    public function index(){
        $posts = Post::latest()->limit(6)->get();
        return view('homepage.homepage', ['posts' => $posts]); 
    }

    public function byAuthor(User $author){
        return view('post.index', ['posts' => $author->posts]); 
    }

    public function show(Post $post){
        $comment = Comment::where('post_id', $post->id)->get();
        $countComment = Comment::where('post_id', $post->id)->count();
        
        return view('homepage.showPost', ['post' => $post, 'comments' => $comment, 'totalcomments' => $countComment]); 
    }
}
