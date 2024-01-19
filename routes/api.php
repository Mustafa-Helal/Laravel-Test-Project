<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function(){
    //Read
    Route::get("products","all");
    Route::get("products/{id}","show");

    //Create
    Route::post("products","store");

    //Update
    Route::put("products/{id}","update");

    //Delete
    Route::delete("products/{id}","delete");


});