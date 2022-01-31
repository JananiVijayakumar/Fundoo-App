<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;

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

Route::group(['middleware' => 'api'], function ($router) {
    Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);
    Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout']);
});
