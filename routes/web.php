<?php

use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(('auth'));

Route::get('/users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts')->middleware(('auth'));
Route::get('/my-profile',[UserController::class,'index'])->middleware(('auth'));
Route::post('/my-profile/update',[UserController::class,'update'])->middleware(('auth'));


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout')->middleware(('auth'));



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts')->middleware(('auth'));
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware(('auth'));
Route::post('/posts', [PostController::class, 'store'])->middleware(('auth'));
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware(('auth'));


Route::post('/send-message', function (Request $request) {

    event(new Message($request->input('username'), $request->input('message')));
    return ["success" => true];
    
})->name('send-message');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes')->middleware(('auth'));
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes')->middleware(('auth'));

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('about');
});

