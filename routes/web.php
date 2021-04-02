<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Watchlist\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\ShowsController;
use App\Http\Controllers\Admin\StatusController;

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
