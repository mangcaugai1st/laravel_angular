<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
class HomeController extends Controller
{
    public function ShowCategoryAndProduct()
    {
        $categories = category::all();
        $products = product::all();
        return view("welcome",['categories'=>$categories],  ['products'=> $products]);
    }
}
