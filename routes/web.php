<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'web'])->name('web.home');


Route::get('/products',[ProductController::class,'product'])->name('products');

Route::get('/auto',[AutoController::class,'auto'])->name('products.auto');
Route::get('/auto/motorbike',[AutoController::class,'motorbike'])->name('products.motorbike');
Route::get('/auto/gasoline',[AutoController::class,'gasoline'])->name('products.gasoline');
Route::get('/auto/diesel',[AutoController::class,'diesel'])->name('products.diesel');
