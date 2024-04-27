<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;

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

Route::get('/product', function (Request $request) {
    return $request->name . ' - ' . $request->email;
});

Route::post('/product', function () {
    return 'post method';
});

Route::put('/put/{id}', function () {
    return 'put method';
});

Route::patch('/patch/{id}', function () {
    return 'patch method';
});

Route::delete('/delete/{id}', function () {
    return 'delete method';
});


Route::middleware('method')->group(function(){
    Route::patch('/product/{id}',[UserController::class, 'update']);
    Route::post('/product',[UserController::class, 'store']);
    Route::put('/product/{id}',[UserController::class, 'update']);
    Route::delete('/product/{id}',[UserController::class, 'destroy']);
});


Route::get('/products', [ProductController::class, 'index']);