<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\GaleryController;

use App\Models\Category;
use App\Models\DownloadModel;
use App\Models\Galery;
use App\Models\Pelayanan;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home',
        "post" => Post::latest()->take(6)->get()

    ]);
});
Route::get('/stats', function () {
    return view('statistik.stats',[
        "title" => "Home",
        "active" => 'home'
    ]);
});
Route::get('/download', function () {
    return view('download', [
        "title" => 'Download',
        "active" => 'download',
        "download" => DownloadModel::all()
    ]);
});

// Route::get('/about', function(){
//     return view('about', [
//         "active" => 'about',
//         "title" => "About",
//         "name" => "Darlian Ramadhani",
//         "email" => "darlian1800018220@webmail.uad.ac.id",
//         "image" => "rembo.jpg"
//     ]);

// });



Route::get('/blogs', [PostController::class, 'index']);
Route::get('blogs/{post:slug}', [PostController::class, 'show']);
Route::get('/profil', [PostController::class, 'profil']);


Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category)
// {
//     return view('posts',[
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category','author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category','author'),

//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard/download', [DownloadController::class, 'index']);
Route::get('/dashboard/download/upload', [DownloadController::class, 'create']);
// Route::get('/downloadfile/{downloadmodel:id}', [DownloadController::class, 'download']);
// Route::delete('/dashboard/download/{downloadmodel:id}', [DownloadController::class, 'destroy']);
// Route::put('/dashboard/download/{id}/edit', [DownloadController::class, 'update']);
// Route::get('blogs/{post:slug}', [PostController::class, 'show']);

Route::resource('/dashboard/download', DownloadController::class)->except('show')->middleware('auth');
Route::get('/dashboard/view/{id}', [DownloadController::class, 'view']);
// Route::post('/dashboard/upload', [DownloadController::class, 'upload']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

//Pelayanan Controller
Route::resource('/dashboard/pelayanan', PelayananController::class)->middleware('admin');
route::get('/pelayanan/{pelayanan:nama_pelayanan}', [PelayananController::class, 'tampil']);


// Galery Controller
Route::resource('/dashboard/galery', GaleryController::class)->middleware('auth');
Route::get('/galery', function () {
    return view('galery',[
        "title" => "Galery",
        "active" => 'galery',
        "galeries" => Galery::paginate(7)
    ]);
});
