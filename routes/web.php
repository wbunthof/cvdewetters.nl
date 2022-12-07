<?php

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

// home
Route::get('/', [\App\Http\Controllers\indexController::class, 'index'])->name('home');
Route::get('/long', function () {
    return view('index_long');
});

// Steunend lid
Route::get('/steunend-lid', [\App\Http\Controllers\SteunendLidController::class, 'index'])->name('index-steunend-lid');
Route::put('/steunend-lid', [\App\Http\Controllers\SteunendLidController::class, 'store'])->name('store-steunend-lid');

// Bonte avond
Route::get('/bonte-avond', function () {
    return view('bonte_avond');
})->name('bonte-avond');

// Optocht
Route::get('/optocht', [\App\Http\Controllers\OptochtController::class, 'index'])->name('index-optocht');
Route::put('/optocht', [\App\Http\Controllers\OptochtController::class, 'store'])->name('store-optocht');


