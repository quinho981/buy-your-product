<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/categories', [CategoryController::class, 'show'])->name('categories');

Route::get('/descriptions', [ProductDescriptionController::class, 'show'])->name('descriptions');

Route::get('/products', [ProductController::class, 'getAllProducts'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'getProduct'])->whereNumber('id')->name('singleProduct');

Route::get('/order_items', [OrderItemController::class, 'show'])->name('order_items');

Route::get('/order', [OrderController::class, 'show'])->name('order');
