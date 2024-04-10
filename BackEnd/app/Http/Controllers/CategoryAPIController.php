<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class CategoryAPIController extends Controller
{
    public  function show()
    {
        $category = category::all();
        return response()->json(['data' => $category]);
    }
}
