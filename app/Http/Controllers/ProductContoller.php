<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['message' => 'Display all products', 'data' => $products]);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Product created successfully']);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['message' => "Display product with ID: $id", 'data' => $product]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Product with ID: $id updated successfully"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Product with ID: $id deleted successfully"]);
    }

    public function uploadImageLocal(Request $request)
    {
        return response()->json(['message' => 'Image successfully stored in local disk driver']);
    }

    public function uploadImagePublic(Request $request)
    {
        return response()->json(['message' => 'Image successfully stored in public disk driver']);
    }
}
