<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function rusWelcome() {
        $products = Product::get();
        return view('rus.welcome', compact('products'));
    }

    public function rusShow($id) {
        $product = Product::findOrFail($id);

        return view('rus.show', compact('product'));
    }
}
