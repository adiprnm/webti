<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\PageCategory;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::take(10)->get();
        $page_categories = PageCategory::with('page')->get();
        
        return view('admin.dashboard.index')->with([
            'news_list'         => $news,
            'page_categories'   => $page_categories
        ]);
    }
}
