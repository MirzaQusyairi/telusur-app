<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login View');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('Register View');
Route::post('/register', [RegisterController::class, 'store'])->name('Register ');

Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('show');
Route::get('/author/{author:username}', [PostController::class, 'byAuthor'])->name('posts by author');

Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('Dashboard Admin');

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('Manage Users');
Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('Create User');
Route::post('/admin/users/create', [AdminUserController::class, 'store'])->name('Store Data User');
Route::delete('/admin/users/{id}', [AdminUserController::class, 'destroy'])->name('Delete Data User');

Route::get('/admin/posts/checkSlug', [AdminPostController::class, 'checkSlug']);
Route::resource('/admin/posts', AdminPostController::class);
