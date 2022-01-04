<?php

use App\Models\Post;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Beranda",
        "katalog" => Post::all()
    ]);
});



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


//halaman detail books
Route::get('detailbooks/{slug}', function($slug){
    $postbuku = [ [
        "title" => "Judul Pertama",
        "slug" => "Judul-Tulisan-Pertama",
        "jenis" => "Artikel",
        "penulis" => "Joseph Joestar",
        "harga" => "-",
        "gambar" => "/upload/cover1.jpg",
        "abstrak" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non corporis dolores quidem ad quasi eum suscipit error explicabo iure, atque mollitia voluptates perspiciatis tenetur eaque perferendis rem sunt aliquam! Earum ad similique laborum excepturi praesentium non iste, ducimus eveniet optio corrupti commodi suscipit fugit eos tempore! Dignissimos, corrupti mollitia! ",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "Judul-Tulisan-Kedua",
            "jenis" => "Artikel",
            "penulis" => "Joseph Joestar",
            "harga" => "-",
            "gambar" => "/upload/cover2.jpg",
            "abstrak" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non corporis dolores quidem ad quasi eum suscipit error explicabo iure, atque mollitia voluptates perspiciatis tenetur eaque perferendis rem sunt aliquam! Earum ad similique laborum excepturi praesentium non iste, ducimus eveniet optio corrupti commodi suscipit fugit eos tempore! Dignissimos, corrupti mollitia! ",
            ]
    ];

    $new_post = [];
    foreach($postbuku as $display){
        if($display['slug'] === $slug){
            $new_post = $display;

        }
    }
    return view('detailbooks', [
        "title" => "DetailBooks",
        "detail" => $new_post

    ]);
});