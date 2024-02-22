<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama: Ahmad Taufiq Hidayatulloh, NIM: 2241720207';
    }

    public function articles($articleId){
        return 'Halaman Artikel dengan Id '.$articleId;
    }
}
