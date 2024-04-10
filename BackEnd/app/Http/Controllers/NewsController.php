<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {
        //
        $query = DB::table('news')
            -> select('news_id', 'news.newsCategory_id', 'news_title', 'newsCategory_name')
            ->join('newsCategory', 'newsCategory.newsCategory_id','=', 'news.newsCategory_id');
        $data = $query->get();
        return view('news', ['data' => $data]);
    }
    public function ShowNewsByCategoryNews($id)
    {
        $query = DB::table('news')
            -> select('news_id', 'news.newsCategory_id', 'news_title', 'newsCategory_name')
            ->join('newsCategory', 'newsCategory.newsCategory_id','=', 'news.newsCategory_id')
            ->where('news.newsCategory_id','=', $id);
        $data = $query->get();
        return view('news', ['data' => $data]);
    }
    public function GetDetailNews($id)
    {
        $query = DB::table('news')
            -> select('news_id', 'newsCategory_id', 'news_title', 'news_header1', 'news_text1', 'news_header2', 'news_text2', 'news_header3', 'news_text3')
            ->where('news_id','=', $id);
        $data = $query->first();
        return view('detailNews', compact('data'));
    }
//    public function showCategoryNews()
//    {
//        $query = DB::table('newsCategory')
//            -> select('newsCategory_id', 'newsCategory_name');
//        $newsCategory = $query->get();
//        return view('news', ['newsCategory' => $newsCategory]);
//    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
