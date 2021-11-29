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
Route::get('/checkout', [App\Http\Livewire\Checkout::class, '__invoke'])->name('checkout');
Route::get('/history', [App\Http\Livewire\History::class, '__invoke'])->name('history');
Route::get('/aboutus', [App\Http\Livewire\AboutUs::class, '__invoke'])->name('aboutus');

Route::middleware(['auth:sanctum', 'isAdmin'])->get('/master/products', [App\Http\Livewire\Master\MasterProduct::class, '__invoke'])->name('master.products');
Route::middleware(['auth:sanctum', 'isAdmin'])->get('/master/aboutus', [App\Http\Livewire\Master\MasterAboutUs::class, '__invoke'])->name('master.aboutus');
Route::middleware(['auth:sanctum', 'isAdmin'])->get('/master/orders', [App\Http\Livewire\Master\MasterOrder::class, '__invoke'])->name('master.orders');
Route::middleware(['auth:sanctum', 'isAdmin'])->get('/master/orders/{id_order}', [App\Http\Livewire\Master\MasterOrderDetail::class, '__invoke'])->name('master.orders.detail');

Route::middleware(['auth:sanctum', 'isAdmin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

