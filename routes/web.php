<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active"=> "about",
        "name" => "Dzakwan Irfan Ramdhani",
        "email" => "dzakone07@gmail.com",
        "image" => "dzakwan.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title'=> 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog', [
        'title'=> "Post by Category: $category->name",
        "active" => "categories",
        'posts' => $category->post->load('category', 'user')
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('blog', [
        'title'=> "Post by Author: $author->name",
        'active' => 'blog',
        'posts' => $author->post->load('user', 'category'),
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
ROute::post('/login', [LoginController::class,'authenticate']);

ROute::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function() {
    return view("dashboard.index",[
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController:: class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');