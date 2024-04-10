<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductAPIController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return response()->json(['data' => $products]);
    }

    public function ShowProductByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        return response()->json(['data' => $products]);
    }

    public function GetDetailProduct($id)
    {
        $product = Product::find($id);
        return response()->json(['data' => $product]);
    }
}
