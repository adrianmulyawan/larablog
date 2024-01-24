<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        return view('pages.news');
    }

    public function detail(Request $request)
    {
        return view('pages.news-detail');
    }
}
