<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $items = News::with(['user'])->orderBy('created_at', 'DESC')->paginate(12);
        return view('pages.news', compact('items'));
    }

    public function detail($slug)
    {
        $data = News::where('news_slug', $slug)->firstOrFail();
        $items = News::with(['user'])->orderBy('created_at', 'DESC')->limit(4)->get();
        // dd($data);
        return view('pages.news-detail', compact('data', 'items'));
    }
}
