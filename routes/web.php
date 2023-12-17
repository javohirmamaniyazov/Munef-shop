<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
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
    $products = Product::get();
    return view('welcome', compact('products'));
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // product section
    Route::get('admin/products', [ProductController::class, 'index'])->name('products');
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('admin/products/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('admin/products/{id}/edit', [ProductController::class, 'update'])->name('products.update');
    Route::delete('admin/products/{id}', 'ProductController@destroy')->name('products.destroy');
});

require __DIR__.'/auth.php';
