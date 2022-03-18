<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
// Route (New)
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// Posts endpoint
Route::get('/admin', [PostsController::class, 'index']);

// Pattern is integer
// Route::get(
//     '/products/{id}',
//     [ProductsController::class, 'show']
// )->where('id', '[0-9]+');

// Pattern is a string
// Route::get(
//     '/products/{name}',
//     [ProductsController::class, 'show']
// )->where('name', '[a-zA-Z]+');

// Route::get(
// '/products/{name}/{id}',
// [ProductsController::class, 'show']
// )->where([
// 'name' => '[a-zA-Z]+',
// 'id' => '[0-9]+'
// ]);


// /products = all products
// /products/productName
// /products/id
