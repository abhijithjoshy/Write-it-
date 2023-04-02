<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\likeAndCommentController;
use App\Http\Controllers\loginController;
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
// Route::match('[get,post]','/',[homecontroller::class,'index']);
Route::match(['get', 'post'], '/', [loginController::class, 'index']);
Route::match(['get', 'post'], '/home', [HomeController::class, 'index']);
Route::match(['get', 'post'], '/like_the_post', [likeAndCommentController::class, 'likeThePost']);
Route::match(['get', 'post'], '/login', [loginController::class, 'login'])->name('login');



