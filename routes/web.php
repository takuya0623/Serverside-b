<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopController;
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
    return view('auth/login');
});

// 表示用(middleware)でログインユーザー以外はアクセスできない
Route::get('/post', [PostController::class, 'create'])->name('post.create')->middleware('auth');
// 投稿時
Route::post('/post', [PostController::class, 'store'])->name('post.store');
// 一覧表示
Route::get('/index', [PostController::class, 'index'])->name('post.index');

Auth::routes();
// ログアウト
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
