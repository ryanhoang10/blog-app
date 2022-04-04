<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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


Route::get('/', [BlogController::class, 'index'])->name('blog-home');
Route::get('/blog-{id}', [BlogController::class, 'show']);
Route::get('/create', [BlogController::class, 'create'])->name('blog-create');
ROute::get('/edit-{id}', [BlogController::class, 'editPage']);
Route::post('/delete', [BlogController::class, 'delete'])->name('blog-delete');
Route::post('/store', [BlogController::class, 'store'])->name('blog-store');
Route::post('/edit-{id}', [BlogController::class, 'edit'])->name('blog-edit');

Route::prefix('user')->group(function() {
    Route::post('/store', [UserController::class, 'store'])->name('register-user');
    Route::post('/edit', [UserController::class, 'edit'])->name('edit-user');
    Route::post('/login', [UserController::class, 'login'])->name('login-user');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout-user');
    Route::get('/login', [UserController::class, 'loginPage'])->name('user-page');
    Route::get('/account', [UserController::class, 'account'])->name('user-account');
});
