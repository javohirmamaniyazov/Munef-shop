<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id)
    {
        $product = Product::findOrFail($id);
        return view('orders.index', compact('product'));
    }

    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

        Order::create([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
            'status' => 'In Progress',
            'product_id' => $product->id
        ]);

        return redirect('/')->with('success', 'Product created successfully.');
    }

    public function changeStatus(Request $request, $orderId)
    {
        $request->validate([
            'status' => 'required|in:Complete,Cancel', // Add any other valid statuses
        ]);

        $order = Order::findOrFail($orderId);

        // Update order status
        $order->update(['status' => $request->input('status')]);

        return redirect()->back()->with('success', 'Order status changed successfully.');
    }

    public function storeWithoutProduct(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string',
        ]);

        Order::create([
            'fullname' => $request->input('fullname'),
            'phone' => $request->input('phone'),
        ]);

        return redirect('/')->with('success', 'Order created successfully.');
    }

    public function index()
    {
        $orders = Order::getRecord()->get();

        return view('admin.orders.index', compact('orders'));
    }
}
