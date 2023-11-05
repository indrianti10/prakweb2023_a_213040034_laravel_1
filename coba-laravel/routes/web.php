<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Catagory;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Widya Dwi Indrianti",
        "email" => "widyaindrianti06@gmail.com",
        "image" => "foto1.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
  
Route::get('/categories', function() {
    return view('catagory', [
        'title' => 'Post Categories',
        'catagories' => Catagory::all()
    ]);
});

Route::get('/categories/{catagory:slug}', function(Catagory $catagory) {
    return view('catagory', [
        'title' => $catagory->name,
        'posts' => $catagory -> posts,
        'catagory' => $catagory->name
    ]);
});