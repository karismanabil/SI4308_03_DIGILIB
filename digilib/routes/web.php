<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\kategori;
use App\Models\User;

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





Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
        
    ]);
});

Route::get('/register', function () {
    return view('registrasi', [
        "title" => "Registrasi"
        
    ]);
});

// Route::get('/detailbooks', function () {
//     return view('detailbooks', [
//         "title" => "DetailBooks"
        
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ"
        
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
        
    ]);
});

//home
Route::get('/home',[PostController::class, 'index']);

//halaman detail books
Route::get('/detailbooks/{post:slug}', [PostController::class, 'show']);

//halaman kategori jenis
// Route::get('jenis/{kategori:slug}', [PostController::class, 'show']);
Route::get('/jenis/{kategori:slug}',function(kategori $kategori){
    return view('jenis', [
        'title' => $kategori->nama,
        'posts' => $kategori->posts,
        'jenis' => $kategori->nama
    ]);
});

//halaman kategories
Route::get('/jenis',function(kategori $kategori){
    return view('jenisjenis', [
        'title' => $kategori->nama,
        'jenisjenis' => kategori::all()
    ]);
});

