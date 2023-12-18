<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index() {
        $products = Product::getProduct()->get();
        return view('admin.products.index', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'rus_name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'rus_description' => 'required|string|max:2000',
            'cost' => 'required|string',
            'ingredients' => 'required|array',
            'image.*' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,ogx,oga,ogv,ogg,webm|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $name = $request->name;
        $rus_name = $request->rus_name;
        $description = $request->description;
        $rus_description = $request->rus_description;
        $cost = $request->cost;
        $ingredients = json_encode($request->input('ingredients'));
        

        $product = new Product;
        $product->name = $name;
        $product->rus_name = $rus_name;
        $product->description = $description;
        $product->ingredients = $ingredients;
        $product->rus_description = $rus_description;
        $product->cost = $cost;
        $product->user_id = Auth::user()->id;
        $product->save();

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';
            $i = 1;
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $file->move($uploadPath, $filename);
                $finalFilePath = $uploadPath . $filename;
                if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $finalFilePath,
                    ]);
                } elseif (in_array($extension, ['mp4', 'ogx', 'oga', 'ogv', 'ogg', 'webm'])) {
                    $product->video_path = $finalFilePath;
                    $product->save();
                }
            }
        }

        return redirect('admin/products')->with('message', "Mahsulot qo'shildi");
    }
    // public function store(Request $request) {
    //     //  dd($request->all());
    //      $request->validate([
    //         'name' => 'required|string|max:255',
    //         'rus_name' => 'required|string|max:255',
    //         'description' => 'required|string|max:2000',
    //         'rus_description' => 'required|string|max:2000',
    //         'cost' => 'required|string',
    //         'image' => 'required|mimes:jpeg,png,jpg|max:5120',
    //         'ingredients' => 'required|array',
    //     ]);

    //     $ingredients = json_encode($request->input('ingredients'));
        
    //     if ($request->hasFile('image')) {
    //         $uploadPath = 'uploads/products/';
    //         $i = 1;
    //         foreach ($request->file('image') as $file) {
    //             $extension = $file->getClientOriginalExtension();
    //             $filename = time() . $i++ . '.' . $extension;
    //             $file->move($uploadPath, $filename);
    //             $finalFilePath = $uploadPath . $filename;
    //             if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
    //                 // This is an image
    //                 $product->productImages()->create([
    //                     'product_id' => $product->id,
    //                     'image' => $finalFilePath,
    //                 ]);
    //             } elseif (in_array($extension, ['mp4', 'ogx', 'oga', 'ogv', 'ogg', 'webm'])) {
    //                 $product->video_path = $finalFilePath;
    //                 $product->save();
    //             }
    //         }
    //     }

    //     Product::create([
    //         'name' => $request->input('name'),
    //         'rus_name' => $request->input('rus_name'),
    //         'description' => $request->input('description'),
    //         'rus_description' => $request->input('rus_description'),
    //         'cost' => $request->input('cost'),
    //         'ingredients' => $ingredients,
    //         'user_id' => Auth::user()->id,
    //         'image' => 'storage/'.$path,
    //     ]);

    //     return redirect('admin/products')->with('success', 'Product created successfully.');
    // }



    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
        
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'rus_name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'rus_description' => 'required|string|max:2000',
            'cost' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:5120'
        ]);

        $product->update([
            'name' => $request->input('name'),
            'rus_name' => $request->input('rus_name'),
            'description' => $request->input('description'),
            'rus_description' => $request->input('rus_description'),
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
