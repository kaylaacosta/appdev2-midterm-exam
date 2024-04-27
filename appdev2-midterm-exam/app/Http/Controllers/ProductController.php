<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    public $products = [
        [
            "id" => 1,
            "name" => "Desktop Computer",
            "price" => 50000,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 2,
            "name" => "System Unit",
            "price" => 10000,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 3,
            "name" => "Speaker",
            "price" => 3000,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 4,
            "name" => "Keyboard",
            "price" => 2500,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            "id" => 5,
            "name" => "Ergonomic Mouse",
            "price" => 1000,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
    ];

    public function index()
    {
        return response()->json($this->products);
    }

    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with id: " . $id
        ]);
    }

    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " updated successfully"
        ]);
    }

    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted"
        ]);
    }
}