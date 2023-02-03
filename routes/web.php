<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;

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

Route::get('/', function() {
    return view('welcome');
});

// All posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware(middleware: 'auth');

Route::group(['middleware' => ['auth']], function() {
    // Create new post
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    
    // Store post
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
    // Edit post
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    
    // Update post
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    
    // Delete post
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// View post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');