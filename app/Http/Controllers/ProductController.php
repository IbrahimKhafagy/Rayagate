<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{

    public function create()
    {
        $categories = Category::all();

        return view('products.create', ['categories' => $categories]);
    }

    public function store(ProductCreateRequest  $request)
    {
        $product = Product::create($request->except('categories'));

        if ($request->has('categories')) {
            $product->categories()->attach($request->input('categories'));
        }

        return redirect()->route('products.index', ['id' => $product->id])->with('success', 'Product created successfully!');
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }


    public function show($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        return view('products.show', compact('product'));
    }


    public function destroy($id)
    {
        // dd($id);
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
