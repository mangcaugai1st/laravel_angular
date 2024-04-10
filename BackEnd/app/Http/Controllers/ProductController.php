<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class ProductController extends Controller
{
    public function show()
    {
        $data = product::all();
        return view('product', ['data' => $data]);
    }

    public function ShowProductByCategory($id)
    {
//        $query = DB::table('products')
//            ->select('id','product_name','product_price', 'product_image')
//            ->where('category_id', '=', $id);
//        $data = $query->get();
//        return view('productByCategory', ['data'=>$data]);
        $data = product::all()
            ->where('category_id', '=', $id);
        return view('productByCategory', ['data'=>$data]);
    }
    public function GetDetailProduct($id)
    {
        $data = product::find($id);
        return view('detailProduct', compact('data'));
    }
}
