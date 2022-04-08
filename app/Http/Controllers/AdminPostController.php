<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index(){
        $data = Post::orderBy('id','DESC')->get();
        return view('admin.post.index', ['data' => $data]);
    }

    public function create(){
        return view('admin.post.create');
    }

    public function store(Request $request){
        $post = new Post(); 
        $post->thumbnail = "/img/namafilegambar.jpg";
        $post->title = $request->title;
        $post->slug = Str::slug($post->title, '-'); 
        $post->body = $request->body;
        $post->save();
        
        return back();
    }
}
