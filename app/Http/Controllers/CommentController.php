<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_id' => 'required',
            'comment' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);

        return back();
    }
}
