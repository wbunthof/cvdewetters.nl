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

// Homepage
Route::name('homepage')->get('/', [\App\Http\Controllers\PageController::class, 'homepage']);

//project CRUD
Route::name('project.index')->get('projects', [\App\Http\Controllers\ProjectController::class, 'index']);
Route::name('project.show')->get('projects/{slug}', [\App\Http\Controllers\ProjectController::class, 'show']);
