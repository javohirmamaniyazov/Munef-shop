<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Order;
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

// order section
Route::get('product/{id}/order', [OrderController::class, 'create'])->name('orders');

Route::post('product/{id}/order', [OrderController::class, 'store'])->name('order.create.product');

// Route for creating an order without a product ID
Route::post('order', [OrderController::class, 'storeWithoutProduct'])->name('order.create.no-product');


// contact section
Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');

// product show
Route::get('/products/{id}/show', [ProductController::class, 'show'])->name('products.show');
Route::get('/admin/dashboard', function () {
    $orders = Order::get();
    $products = Product::getProduct()->get();
    return view('admin.index', compact('orders', 'products'));
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

    //orders
    Route::get('admin/orders', [OrderController::class, 'index'])->name('orders.show');
    Route::put('admin/orders/{orderId}/change-status', [OrderController::class, 'changeStatus'])
        ->name('admin.orders.changeStatus');
});

require __DIR__ . '/auth.php';
