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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/farmproduce', [App\Http\Controllers\farmproductController::class, 'index'])->name('produce');
Route::get('/ferterlizers', [App\Http\Controllers\ferterlizersController::class, 'index'])->name('ferterlixer');
Route::get('/machinery', [App\Http\Controllers\machineryController::class, 'index'])->name('machinery');
Route::get('/farmclothing', [App\Http\Controllers\farmclothingController::class, 'index'])->name('clothing');
Route::get('/gadgets', [App\Http\Controllers\gadgetsController::class, 'index'])->name('fadgets');
Route::get('/services', [App\Http\Controllers\servicesController::class, 'index'])->name('services');
Route::get('/farmchemicals', [App\Http\Controllers\farmchemicalsController::class, 'index'])->name('chemicals');
Route::get('/plantingseeds', [App\Http\Controllers\plantingseedsController::class, 'index'])->name('seeds');
Route::get('/tools', [App\Http\Controllers\toolsController::class, 'index'])->name('tools');
Route::get('/addproduct', [App\Http\Controllers\addproductController::class, 'index'])->name('add');
Route::post('/products', [App\Http\Controllers\addproductController::class, 'store'])->name('addproduct');
//Route::get('/cart', [App\Http\Controllers\CartController::class, 'showForm'])->name('cart.showForm');
//Route::post('/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.addToCart');
//Route::post('/cart/submit-order/{cartItemId}', [App\Http\Controllers\CartController::class, 'submitOrder'])->name('cart.submitOrder');
Route::get('/products', [App\Http\Controllers\addproductController::class, 'display'])->name('display');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'orderdisplay'])->name('display');

//Route::post('/products', [ProductsController::class, 'updateStatus'])->name('updateStatus');
// routes/web.php
Route::post('/update-status', [App\Http\Controller\ProductsController::class, 'updateStatus'])->name('updateStatus');
