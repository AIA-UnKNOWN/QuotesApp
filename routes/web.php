<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', Controllers\IndexController::class)
    ->name('index');
Route::post('/post', Controllers\AddPostController::class)
    ->name('add-post');
Route::get('/{id}/edit', Controllers\EditPostController::class)
    ->name('edit-post');
Route::post('/{id}/update', Controllers\UpdatePostController::class)
    ->name('update-post');
Route::post('/{id}/delete', Controllers\DeletePostController::class)
    ->name("delete-post");