<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    // CREATE DATA
    public function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $quantity = $request->quantity;
        $description = $request->description;

        Products::create([
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'description' => $description
        ]);

        return "Product added successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }

    // READ DATA
    public function index()
    {
        $products = Products::all();

        return view('products.index', ['products' => $products]);
    }

    // UPDATE DATA
    public function edit($id)
    {
        $product = Products::find($id);

        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $description = $request->input('description');

        $product = Products::find($id);
        $product->name = $name;
        $product->price = $price;
        $product->quantity = $quantity;
        $product->description = $description;
        $product->save();

        return "Product updated successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }

    // DELETE DATA
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return "Product deleted successfully. <a href='" . route('products.index') . "'>View Products</a>";
    }
}
