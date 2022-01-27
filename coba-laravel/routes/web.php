<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adam Berdi R. Adipati",
        "email" => "adamberdi46@gmail.com",
        "birth" => "04 September 1999",
        "address" => "Jln Anggur 7 No 12 Blok 4 Perumnas Kabupaten Subang, Jawa Barat 41211",
        "image" => "pp.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);



//halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
