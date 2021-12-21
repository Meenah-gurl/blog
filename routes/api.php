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

// Route::prefix('gallery')->group(function () { 
//     Route::post('/upload', [PostController::class, 'upload_image'])->name('api.gallery.upload');
    // Route::put('/uploads', [PostController::class, 'upload_images'])->name('api.gallery.uploads');
// });

