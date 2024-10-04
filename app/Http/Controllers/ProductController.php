<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function getProduct(){
        return response()->json(Products::all(),200);
    }

    public function getProductById($id){
       $product = Products::find($id);
       if(is_null($product)){
        return response()->json(['message' => 'Produit introuvable'],404);
       }
        return response()->json(Products::find($id),200);
    }

    public function addProduct(Request $request){
        $product = Products::create($request->all());
        return response($product,201);
    }

    public function updateProduct(Request $request, $id){
        $product = Products::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produit introuvable'],404);
        }
        $product->update($request->all());
        return response($product,200);
    }

    public function deleteProduct(Request $request, $id){
        $product = Products::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produit introuvable'],404);
        }
        $product->delete();
        return response(null,204);
    }
}
