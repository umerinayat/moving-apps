<?php

use App\Http\Controllers\BrowsershotController;
use App\Http\Controllers\ImageProcessingController;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return view('client.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/convert-webpage-content-to-full-image-by-using-webpage-url', function() {
    return view('welcome');
});

Route::post('/webpage-to-image', [BrowsershotController::class, 'generateImageFromWebUrl']);
Route::get('/download/{fileName}', [BrowsershotController::class, 'download']);


// Image processing 
Route::get('/resize-and-scale-your-image-to-different-sizes', [ImageProcessingController::class, 'index']);
Route::post('/image/resize', [ImageProcessingController::class, 'resize']);




