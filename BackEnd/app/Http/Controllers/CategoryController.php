<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\category;

class CategoryController extends Controller
{
//    public function show()
//    {
//        $query = DB::table('category')
//            ->select('category_id', 'category_name','category_thumbnail');
//        $data = $query->get();
//        return view("category", ['data'=>$data]);
//    }
    public  function show()
    {
        $data = category::all();
        return view("category",['data'=>$data]);
    }
}
