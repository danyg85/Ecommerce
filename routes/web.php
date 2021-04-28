<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('homes');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show'])->name('profile')->middleware('auth');
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'single'])->name('productsingle')->middleware('auth');
Route::patch('/user/update' , [App\Http\Controllers\UserController::class, 'update'])->name('update')->middleware('auth');