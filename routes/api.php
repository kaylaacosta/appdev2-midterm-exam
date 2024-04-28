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

Route::prefix('api')->group(function () {
    Route::apiResource('/products', 'ProductController');
    
    // Route for uploading an image using the local disk driver
    Route::post('/products/upload/local', 'ProductController@uploadLocal')->name('upload.local');
    
    // Route for uploading an image using the public disk driver
    Route::post('/products/upload/public', 'ProductController@uploadPublic')->name('upload.public');
});
