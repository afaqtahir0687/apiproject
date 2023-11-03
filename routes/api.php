<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post',[App\Http\Controllers\Api\PostController::class, 'index']);
Route::post('post/store',[App\Http\Controllers\Api\PostController::class, 'store']);

Route::get('jobs', [\App\Http\Controllers\Api\JobsController::class, 'index']);
Route::post('jobs/store', [\App\Http\Controllers\Api\JobsController::class, 'store']);


Route::get('comments', [\App\Http\Controllers\Api\CommentsController::class, 'index']);
Route::post('comments/store', [\App\Http\Controllers\Api\CommentsController::class, 'store']);


// Route::get('products', [\App\Http\Controllers\Api\ProductController::class, 'index']);
// Route::post('products/store', [\App\Http\Controllers\Api\ProductController::class, 'store']);