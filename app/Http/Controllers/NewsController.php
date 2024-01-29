<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $items = News::with(['user'])->orderBy('created_at', 'DESC')->paginate(12);
        $categories = NewsCategory::all();
        return view('pages.news', compact('items', 'categories'));
    }

    public function detail($slug)
    {
        $data = News::where('news_slug', $slug)->firstOrFail();
        $items = News::with(['user'])->orderBy('created_at', 'DESC')->limit(4)->get();
        // dd($data);
        return view('pages.news-detail', compact('data', 'items'));
    }

    public function newsByCategory($slug)
    {
        $category = NewsCategory::where('news_category_slug', $slug)->firstOrFail();
        $items = News::with(['user'])
            ->where('news_category_id', $category->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        $categories = NewsCategory::all();

        return view('pages.news', compact('items', 'categories'));
    }
}
