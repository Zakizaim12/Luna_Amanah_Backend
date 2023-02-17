<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DakwahController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookingFrontController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardDakwahController;
use App\Http\Controllers\DashboardPembayaranController;
use App\Http\Controllers\HomeController;

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
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/booking', function () {
    return view('booking', [
        "title" => "Booking",
        'active' => 'booking'
    ]);
});

Route::get('/contact', function(){
    return view('contact',[
        "title" => 'Contact',
        'active' => 'contact'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "nama" => "Moh. Abib Safaqdillah",
        "email" => "mohammadabif46@gmail.com",
        "Universitas" => "Universitas Hasanuddin"    
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
//halaman booking
Route::get('posts/{post:slug}/booking', [PostController::class, 'book']);
Route::post('posts/{post:slug}/booking', [PostController::class, 'store']);
// Route::post('posts/{post:slug}/booking', [PostController::class, 'store']);
// Route::post('posts/{post:slug}/booking', [BookingFrontController::class, 'store']);
// Route::resource('posts/{post:slug}/booking', BookingFrontController::class);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all() 
    ]);
});
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load(['category','author'])
//     ]);
// });
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'author',
//         'posts' => $author->posts->load(['category','author'])
//     ]);
// });

//Halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::get('/dashboard/pembayaran', [DashboardPembayaranController::class, 'bayar'])->middleware('auth');

Route::resource('/dashboard/dakwahs', DashboardDakwahController::class)->middleware('auth');
Route::get('/dakwahs', [DakwahController::class, 'index']);
Route::get('dakwahs/{dakwah:slug}', [DakwahController::class, 'show']);

Route::resource('/dashboard/pembayaran', BookingController::class)->middleware('auth');
Route::get('/export/excel', [BookingController::class, 'export'])->middleware('auth');
Route::get('/dashboard/pembayaran/{pembayaran}', [BookingController::class, 'invoice'])->middleware('auth');

// Route::get('/dashboard/pembayaran', [BookingController::class, 'index'])->middleware('auth');
// Route::delete('/dashboard/pembayaran', [BookingController::class, 'destroy'])->middleware('auth');
// // Route::get('/dashboard/pembayaran/{{ $booking->title }}', [BookingController::class, 'show'])->middleware('auth');
// Route::post('/posts/{{ $post->slug }}/booking', [BookingController::class, 'store']);