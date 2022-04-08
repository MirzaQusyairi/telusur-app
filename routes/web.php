<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('show');


Route::get('/admin', [AdminController::class, 'dashboard'])->name('Dashboard Admin');

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('Manage Users');
Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('Create User');
Route::post('/admin/users/create', [AdminUserController::class, 'store'])->name('Store Data User');

Route::get('/admin/posts', [AdminPostController::class, 'index'])->name('Manage Posts');
Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('Create Post');
Route::post('/admin/posts/create', [AdminPostController::class, 'store'])->name('Store Data Post');
