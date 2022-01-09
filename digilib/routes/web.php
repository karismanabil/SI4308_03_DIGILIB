<?php

use App\Models\kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginRegisController;

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

<<<<<<< HEAD
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
        
    ]);
});

//home
Route::get('/home',[PostController::class, 'index']);
=======
//halaman awal
Route::get('/',[PostController::class, 'index']);

//halaman Buku
Route::get('/bukubuku',[PostController::class, 'buku']);
>>>>>>> 0707e8fe7800591996ab98d158471be556bda127

//halaman detail books
Route::get('/detailbooks/{post:slug}', [PostController::class, 'detail']);


Route::get('/jenis/{kategori:slug}', [PostController::class, 'jenis'] );

//halaman kategories
Route::get('/jenis',function(kategori $kategori){
    return view('jenisjenis', [
        'title' => $kategori->nama,
        'jenisjenis' => kategori::orderBy('nama')->get(),
    ]);
});

Route::get('/loginuser', [LoginRegisController::class, 'loginuser'] );
// Route::post('/loginuser', [LoginRegisController::class, 'authenticate'] );
// Route::post('/logout', [LoginRegisController::class, 'logout'] );


Route::get('/registeruser', [LoginRegisController::class, 'registeruser'] );
// Route::post('/registeruser', [LoginRegisController::class, 'store'] );



Route::get('/loginadmin', [LoginRegisController::class, 'loginadmin'] );
Route::post('/loginadmin', [LoginRegisController::class, 'loginadminwork'] )->name('loginadminwork');

Route::get('/registeradmin', [LoginRegisController::class, 'registeradmin'] );
Route::post('/registeradmin', [LoginRegisController::class, 'createadmin'] )->name('createadmin');



Route::get('/dashboard', [PostController::class, 'indexdashboard']);

Route::get('/mypost', [PostController::class, 'mypost']);
Route::get('/createpost', [PostController::class, 'createpostindex']);
Route::post('/createpost', [PostController::class, 'createbook'])->name('createbook');
Route::get('/deletebook/{id}', [PostController::class, 'deletebook'])->name('deletebook');
Route::get('/editpost/{id}', [PostController::class, 'editbookindex'])->name('editbook');
Route::post('/editpost/{id}', [PostController::class, 'updatebook'])->name('updatebook');

Route::get('/pinjam/{id}', [PostController::class, 'pinjam'])->name('pinjam');
Route::post('/createpinjam', [PostController::class, 'createpinjam'])->name('createpinjam');


// Route::resource('/dashboard/posts', [DashboardPostController::class])->middleware('auth');
