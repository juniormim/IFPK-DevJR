<?php

use App\Http\Controllers\adminProductController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
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

Route::get('/', [homeController::class,'index']);
Route::get('/product', [productController::class,'index']);

Route::get('/admin/product', [adminProductController::class,'index']);
Route::get('/admin/product/edit', [adminProductController::class,'edit']);
