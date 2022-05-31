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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']); //LISTAR USUARIOS
    Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']); //CREAR USUARIOS
    Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'show']); //CREAR USUARIOS

    Route::get('/jobs', [App\Http\Controllers\JobOfferController::class, 'index']); //LISTA TODOS LOS TRABAJOS
    Route::post('/jobs', [App\Http\Controllers\JobOfferController::class, 'store']); //CREAR OFERTA LABORAL
    Route::get('/jobs/{id}', [App\Http\Controllers\JobOfferController::class, 'show']); //MUESTRA LA OFERTA

});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\AuthController::class, 'refresh']);
    Route::get('/me', [App\Http\Controllers\AuthController::class, 'me']);
});
