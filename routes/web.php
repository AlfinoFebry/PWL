<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/profile', [HomeController::class, 'profile']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::prefix('product')->group (function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{detail}', [ProductController::class, 'detail']);
    });

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{news}', [NewsController::class, 'show']);

Route::prefix('program')->group (function(){
    Route::get('/', [PageController::class, 'program']);
    Route::get('/{subProgram}', [PageController::class, 'program']);
});

Route::get('/about-us', [PageController::class, 'aboutUs']);

Route::resource('/contact-us', ContactController::class)->only([
    'index', 'create', 'store'
   ]);
   