<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
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

//Using Controller

//Welcome Page
Route::get('/', [WelcomeController::class, 'index'])->name('home.index');

//Blog Page------

//all posts
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

//single post
Route::get('/blog/single-blog-post', [BlogController::class, 'show'])->name('blog.show');


//About page
Route::get('/about', function(){
    return view('about');
})->name('about');


//Contact page
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact.index');
