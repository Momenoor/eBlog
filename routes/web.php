<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\ArticleController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('article', App\Http\Controllers\ArticleController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('comment', App\Http\Controllers\CommentController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('role', App\Http\Controllers\RoleController::class);
    Route::resource('tag', App\Http\Controllers\TagController::class);
    Route::resource('media', App\Http\Controllers\MediaController::class);
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::post('article/{article}/comment', [CommentController::class, 'store'])->name('article.create.comment');
});

