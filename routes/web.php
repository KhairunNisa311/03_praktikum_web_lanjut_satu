<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HelloController;

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

Route::get('/', [HelloController::class, 'index']);

Route::prefix('prodak')->group(function(){
    Route::get('/produk', [HelloController::class, 'product1']);
});

Route::get('/news/{news}', [HelloController::class, 'news1']);

Route::prefix('program')->group(function(){
    Route::get('/program', [HelloController::class, 'program1']);
});

Route::get('/about-us', [HelloController::class, 'aboutUs']);

Route::get('contact-us', [HelloController::class, 'ContactUs']);
