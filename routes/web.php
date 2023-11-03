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


Route::get('post',[App\Http\Controllers\PostController::class, 'index']);
Route::post('post/store',[App\Http\Controllers\PostController::class, 'store']);

Route::get('jobs', [\App\Http\Controllers\JobsController::class, 'index']);
Route::post('jobs/store', [\App\Http\Controllers\JobsController::class, 'store']);


Route::get('comments', [\App\Http\Controllers\CommentsController::class, 'index']);
Route::post('comments/store', [\App\Http\Controllers\CommentsController::class, 'store']);