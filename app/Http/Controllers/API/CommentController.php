<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function getCommentByPost($id_post){
        $data = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->join('posts', 'comments.post_id', '=', 'posts.id')
            ->select('comments.id', 'users.name', 'posts.title', 'comments.comment', 'comments.created_at')
            ->where('comments.post_id', '=', $id_post)
            ->orderBy('comments.id', 'ASC')
            ->get();
        if (!$data->isEmpty()) {
            return response()->json([
                'status' => true,
                'message' => 'Comments successfully fetched!',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No review found'
            ], 404);
        }
    }

    public function addComment(Request $request, $id_post){
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
        $comment = Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $id_post,
            'comment' => $request->comment
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Comment has been posted!'
        ], 201);
    }
}
