<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
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
// Define a custom middleware for admin
Route::resource('article', App\Http\Controllers\ArticleController::class)->only('index', 'create', 'show');

Route::middleware('auth')->group(function () {
    Route::resource('article', App\Http\Controllers\ArticleController::class)->only('create', 'store', 'edit', 'update', 'destroy');
    Route::resource('comment', App\Http\Controllers\CommentController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('media', App\Http\Controllers\MediaController::class);
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::post('article/{article}/comment', [CommentController::class, 'store'])->name('article.create.comment');
    Route::get('comment/{comment}/add-form', [CommentController::class, 'addCommentForm'])->name('comment.add_comment_form');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('tag', App\Http\Controllers\TagController::class);
    Route::resource('role', App\Http\Controllers\RoleController::class);
});

Route::group(['middleware' => ['role:admin']], function () {
});
