<?php

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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('registrasi');
});

Route::get('/detailbooks', function () {
    return view('detailbooks');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});