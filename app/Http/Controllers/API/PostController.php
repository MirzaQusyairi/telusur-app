<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allPost(Request $request){
        $data = Post::join('users', 'posts.user_id', '=', 'users.id')
                    ->get(['users.name as author', 'posts.*'])
                    ->makeHidden(['user_id']);
        
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Post successfully fetched!',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No Post found'
            ], 400);
        }
    }

    public function postByID($id){
        try {
            $data = Post::find($id);
            if ($data) {
                return response()->json([
                    'status' => true,
                    'message' => 'Post successfully fetched!',
                    'data' => $data
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'No Post found'
                ], 400);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error, please contact administrator!',
                'errors' => $e->getMessage()
            ], 400);
        }
    }

    // public function create(Request $request){

    // }
}
