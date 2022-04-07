<?php

use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\PenginapanController;
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

Route::get('/', function () {
    return view('front.home');
});





// Wisata
Route::get('/wisata', function () {
    return view('front.wisata');
});
Route::get('/wisataDetail', function () {
    return view('front.wisataDetail');
});


// Kuliner
Route::get('/kuliner', function () {
    return view('front.kuliner');
});
Route::get('/kulinerDetail', function () {
    return view('front.kulinerDetail');
});




// penginapan
Route::get('/penginapan', function () {
    return view('front.penginapan');
});
Route::get('/penginapanDetail', function () {
    return view('front.penginapanDetail');
});


// Tentang
Route::get('/tentang', function () {
    return view('front.tentang');
})->name('tentang');

// Kontak
Route::get('/kontak', function () {
    return view('front.kontak');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



