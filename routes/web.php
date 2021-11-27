<?php

use App\Http\Livewire\Home;
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

Route::get('/', Home::class)->name('/');
Route::get('/products', [App\Http\Livewire\ProductIndex::class, '__invoke'])->name('products');
Route::get('/products/category/{categoryId}', [App\Http\Livewire\ProductCategory::class, '__invoke'])->name('products.category');
Route::get('/products/{productId}', [App\Http\Livewire\ProductDetail::class, '__invoke'])->name('products.detail');
Route::get('/cart', [App\Http\Livewire\Cart::class, '__invoke'])->name('cart');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

