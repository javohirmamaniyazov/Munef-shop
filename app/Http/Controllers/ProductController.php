<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::getProduct()->get();
        return view('admin.products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    public function create()
    {
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
            'rusIngredients' => 'required|array',
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
        $rusIngredients = json_encode($request->input('rusIngredients'));

        $product = new Product;
        $product->name = $name;
        $product->rus_name = $rus_name;
        $product->description = $description;
        $product->ingredients = $ingredients;
        $product->rusIngredients = $rusIngredients;
        $product->rus_description = $rus_description;
        $product->cost = $cost;
        $product->user_id = Auth::user()->id;
        $product->save();

        if ($request->hasFile('image')) {
            $uploadPath = 'products/';
            $i = 1;
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $file->storeAs($uploadPath, $filename, 'public');

                if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => 'storage/' . $uploadPath . $filename,
                    ]);
                } elseif (in_array($extension, ['mp4', 'ogx', 'oga', 'ogv', 'ogg', 'webm'])) {
                    $product->video_path = 'storage/' . $uploadPath . $filename;
                    $product->save();
                }
            }
        }

        return redirect('admin/products')->with('message', "Mahsulot qo'shildi");
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, int $id)
    {
        $product = Product::findOrFail($id);

        // Delete old images
        foreach ($product->productImages as $image) {
            if (file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }
            $image->delete();
        }

        $name = $request->name;
        $rus_name = $request->rus_name;
        $description = $request->description;
        $rus_description = $request->rus_description;
        $cost = $request->cost;
        $ingredients = json_encode($request->input('ingredients'));
        $rusIngredients = json_encode($request->input('rusIngredients'));

        $product->name = $name;
        $product->rus_name = $rus_name;
        $product->description = $description;
        $product->ingredients = $ingredients;
        $product->rusIngredients = $rusIngredients;
        $product->rus_description = $rus_description;
        $product->cost = $cost;
        $product->user_id = Auth::user()->id;
        $product->save();

        if ($request->hasFile('image')) {
            $uploadPath = 'products/';
            $i = 1;
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $file->storeAs($uploadPath, $filename, 'public');

                if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'svg'])) {
                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => 'storage/' . $uploadPath . $filename,
                    ]);
                } elseif (in_array($extension, ['mp4', 'ogx', 'oga', 'ogv', 'ogg', 'webm'])) {
                    $product->video_path = 'storage/' . $uploadPath . $filename;
                    $product->save();
                }
            }
        }

        return redirect('/admin/products');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (file_exists($product->image)) {
            unlink($product->image);
        }

        $product->delete();

        return redirect('/admin/products')->with('success', 'Product deleted successfully.');
    }
}
