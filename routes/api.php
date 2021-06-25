<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/article/comment/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'comment']);
Route::post('/article/likes/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'likes']);
Route::post('/article/views/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'views']);
