<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Watchlist\IndexController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\ShowsController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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


// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Admin Register
Route::get('/admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('/admin/register', [RegisterController::class, 'store']);

// Admin Login
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store']);

// Admin Logout
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// Admin Show
Route::get('/admin/shows', [ShowsController::class, 'index'])->name('shows');
Route::get('/admin/shows/create', [ShowsController::class, 'create'])->name('shows.create');

// Admin Genre
Route::get('/admin/genre', [GenreController::class, 'index'])->name('genre');
Route::get('/admin/genre/create', [GenreController::class, 'create'])->name('genre.create');

// Admin Status
Route::get('/admin/status', [StatusController::class, 'index'])->name('status');
Route::get('/admin/status/create', [StatusController::class, 'create'])->name('status.create');


// Watchlist Landing Page
Route::get('/', [IndexController::class, 'index'])->name('index');
