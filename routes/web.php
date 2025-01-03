<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/gate', [App\Http\Controllers\AuthorisationController::class, 'index'])->name('gate.index');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/posts/delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');

