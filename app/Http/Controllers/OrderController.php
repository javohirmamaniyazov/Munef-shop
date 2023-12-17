<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id) {
        $product = Product::findOrFail($id);
        return view('orders.index', compact('product'));
    }

    public function store(Request $request, $id){
        $product = Product::findOrFail($id);

        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

        Order::create([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'product_id' => $product->id
        ]);

        return redirect('/')->with('success', 'Product created successfully.');
    }

    public function index() {
        $orders = Order::get();

        return view('admin.orders.index', compact('orders'));
    }
}
