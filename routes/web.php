<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResiController;
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

// Route::get('/', [ResiController::class, 'index']);
// Route::get('/contact', [ResiController::class, 'contact']);
// Route::get('/articles', [ResiController::class, 'articles']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);