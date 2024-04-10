<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class AdminProductAPIController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->select('products.id', 'product_name', 'product_price', 'product_image', 'category_name')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->get();
        return response()->json(['products' => $products]);
    }

    public function create()
    {

    }

//    public function store(Request $request)
//    {
//        $request->validate
//        (
//            [
//                'product_name' => 'required',
//                'product_price' => 'required|numeric',
//                'product_image' => 'image|mimes"jpeg,png,jpg,gif|max:2048',
//                'category_id' => 'required',
//                'updated_at' => 'nullable',
//                'created_at' => 'nullable',
//            ]
//        );
//        if ($request->hasFile('product_image')) {
//            $image = $request->file('product_image');
//            $imageName = time().'.'.$image->getClientOriginalExtension();
//            $image->move(public_path('images'), $imageName);
//        } else {
//            $imageName = null;
//        }
//        $data = new Product();
//        $data->product_name = $request->input("product_name");
//        $data->product_price = $request->input("product_price");
//        $data->product_image = $imageName;
//        $data->category_id = $request->input("category_id");
//        $data->save();
//
//        return response()->json(['message' => 'Thêm sản phẩm mới thành công'], 201);
//    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'image|mimes"jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable',
        ]);
        if ($request->hasFile('product_image'))
        {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        else
        {
            $imageName = null;
        }
        $product = product::create($validateData);
        return response()->json($product, 201);
    }
    public function show($id)
    {
        $products = product::findOrFail($id);
        return response()->json(['product'=>$products]);
    }

    public function edit($id)
    {
        $product = product::findOrFail($id);
        return response()->json(['product'=> $product]);
    }

//    public function update(Request $request, $id)
//    {
//        $product = product::findOrFail($id);
//        $validateData = $request->validate([
//            'product_name' => 'required',
//            'product_price' => 'required|numeric',
//            'product_image' => 'nullable',
//            'category_id' => 'required',
//            'updated_at' => 'nullable',
//            'created_at' => 'nullable'
//        ]);
//        $product->update($validateData);
//        return response()->json(['message' => 'Product Updated Succesfully']);
//    }
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'nullable',
            'category_id' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable'
        ]);

        $product->update($validatedData);

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Sản phẩm đã được xóa thành công']);
    }
}
