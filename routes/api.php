<?php

use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PUBLIC ACCESS
Route::post('/register',[UserController::class, 'register']);
Route::post('/login',[UserController::class, 'login']);

Route::get('/post',[PostController::class, 'allPost']);
Route::get('/post/{id}', [PostController::class, 'postByID']);

Route::get('/comment/post/{id_post}', [CommentController::class, 'getCommentByPost']);
//END PUBLIC ACCESS

//route must login
//Route::group(['middleware' => ['auth:sanctum', 'role:public']], function () { <-- when need to limit role
Route::group(['middleware' => ['auth:sanctum']], function () { 

    //logout
    Route::get('/logout', [UserController::class, 'logout']);

    //get profile data
    Route::get('/profile', [UserController::class, 'profile']);

    //add comment 
    Route::post('/comment/post/{id_post}', [CommentController::class, 'addComment']);
});

