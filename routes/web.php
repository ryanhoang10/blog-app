<?php

use App\Http\Controllers\BlogController;
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
Route::get('/create', [BlogController::class, 'create'])->name('blog-create');
ROute::get('/edit-{id}', [BlogController::class, 'editPage']);
Route::post('/delete', [BlogController::class, 'delete'])->name('blog-delete');
Route::post('/store', [BlogController::class, 'store'])->name('blog-store');
Route::post('/edit-{id}', [BlogController::class, 'edit'])->name('blog-edit');