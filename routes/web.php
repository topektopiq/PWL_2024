<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/nim', function () {
    return "NIM: 2241720207 NAMA: Ahmad Taufiq Hidayatulloh";
});

Route::get(	'/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId."Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function($articleId) {
    return "Halaman Artikel dengan ID ".$articleId;
});


Route::get(	'/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

// Route::get('/hello', [WelcomeController::class,'hello']);

