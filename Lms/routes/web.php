<?php

use App\Http\Controllers\WebController;
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

//Page loaders
Route::get('/home', [WebController::class, 'home'])->name('home');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/courses', [WebController::class, 'courses'])->name('courses');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/profile',[WebController::class, 'profile'])->name('profile');
Route::get('/contactUs', [WebController::class, 'contactUs'])->name('contact');
Route::get('/aboutUs', [WebController::class, 'aboutUs'])->name('aboutUs');
Route::get('/update', [WebController::class, 'update'])->name('update');
Route::get('/watchVideo', [WebController::class, 'watchVideo'])->name('watchVideo');
Route::get('/teachersProfile', [WebController::class, 'teachersProfile'])->name('teachersProfile');
Route::get('/playList', [WebController::class, 'playList'])->name('playList');
