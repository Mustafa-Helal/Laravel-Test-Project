<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller{

//rete limiting
public function __construct(){
        $this->middleware('throttle:5,1')->only('store');
    }

// Show all product
public function all(){

    $products = Product::all();
        if($products == null){
            return response()->json([
                "msg"=>"No product found"
            ],404);
        }
        return ProductResource::collection($products);
}

// Show product by Id
public function show($id){

    $product = Product::find($id);
        if($product == null){
            return response()->json([
                "msg"=>"product not found"
            ],404);
        }
        return new ProductResource($product);
}

// Add product
public function store(Request $request){

    //Validation
    $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
    ]);

    if ($validator->fails()) {
            return response()->json([
                "errors" => $validator->errors()
            ], 422);
    }

    //Create
    $product = Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "stock" => $request->stock,
    ]);

    if ($product) {
            return response()->json([
                "msg" => "Product added successfully"
            ], 201);
    } else {
            return response()->json([
                "msg" => "Failed to add product"
            ], 500);
    }
}

// Update product
public function update(Request $request, $id){


    //Validation
    $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
    ]);

    $product = Product::find($id);
    if($product == null){
        return response()->json([
            "msg"=>"product not found"
        ],404);
    }

    $product->update([
        "name" => $request->name,
        "description" => $request->description,
        "price" => $request->price,
        "stock" => $request->stock,
    ]);

    if ($product) {
        return response()->json([
            "msg" => "Product updated successfully",
            "product"=>new ProductResource($product)
        ], 201);
    } else {
            return response()->json([
                "msg" => "Failed to apdate product"
            ], 500);
    }
}

// Delete product
public function delete($id){

    $product = Product::find($id);
    if($product==null){
        return response()->json([
        "msg"=>"product not found"
        ],404);
    }
    $product->delete();
    return response()->json(['message' => 'Product deleted successfully']);
}

}