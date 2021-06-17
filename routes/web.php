<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'list'])->name('categories');
Route::post('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/get', [CategoryController::class, 'get']);
Route::delete('/categories/delete', [CategoryController::class, 'delete']);

Route::get('/products', [ProductController::class, 'list'])->name('products');
Route::post('/products/create', [ProductController::class, 'create']);
Route::get('/products/get', [ProductController::class, 'get']);
Route::delete('/products/delete', [ProductController::class, 'delete'])->name('product.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
