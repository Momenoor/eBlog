<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles',App\Http\Controllers\ArticlesController::class);
Route::resource('categories',App\Http\Controllers\CategoriesController::class);
Route::resource('comments',App\Http\Controllers\CommentsController::class);
Route::resource('permissions',App\Http\Controllers\PermissionsController::class);
Route::resource('roles',App\Http\Controllers\RolesController::class);
Route::resource('tags',App\Http\Controllers\TagsController::class);
Route::resource('media',App\Http\Controllers\MediaController::class);
