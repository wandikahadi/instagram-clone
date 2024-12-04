<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'doLogin'])->name('doLogin');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'doRegister'])->name('doRegister');
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('editProfile');
    Route::put('/profile/edit', [UserController::class, 'updateProfile'])->name('updateProfile');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/add', [PostController::class, 'addPost'])->name('addPost');
Route::post('/posts/add', [PostController::class, 'storePost'])->name('storePost');
Route::get('/posts/archived', [PostController::class, 'archived'])->name('archived');
Route::get('/posts/archived/export-pdf', [PostController::class, 'exportPdf'])->name('exportPdf');
Route::get('/post/{id}/restore', [PostController::class, 'restore'])->name('restore');
Route::delete('/post/archive/{id}', [PostController::class, 'archive'])->name('archive');
