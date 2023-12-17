<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request) {
        //  dd($request->all());
         $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'cost' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg|max:5120'
        ]);
        
        $image = $request->file('image');

        $save = $image->store('public/files');
        $path = str_replace("public/", "", $save);

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'cost' => $request->input('cost'),
            'user_id' => Auth::user()->id,
            'image' => 'storage/'.$path,
        ]);

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
        
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'cost' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:5120'
        ]);

        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'cost' => $request->input('cost'),
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if (file_exists($product->image)) {
                unlink($product->image);
            }

            $image = $request->file('image');
            $path = $image->store('public/files');
            $product->update(['image' => 'storage/' . str_replace("public/", "", $path)]);
        }

        return redirect('admin/products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
    
        if (file_exists($product->image)) {
            unlink($product->image);
        }
    
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    
}