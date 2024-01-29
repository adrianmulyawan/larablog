<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(Request $request)
    {
        $items = Publication::with(['user'])->orderBy('created_at', 'DESC')->paginate(12);
        $categories = PublicationCategory::all();

        return view('pages.publication', compact('items', 'categories'));
    }

    public function detail($slug)
    {
        $data = Publication::where('publication_slug', $slug)->firstOrFail();
        $items = Publication::with(['user'])->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('pages.publication-detail', compact('data', 'items'));
    }

    public function publicationByCategory($slug)
    {
        $publication = PublicationCategory::where('publication_category_slug', $slug)->firstOrFail();
        $items = Publication::with(['user'])
            ->where('publication_category_id', $publication->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        $categories = PublicationCategory::all();

        return view('pages.publication', compact('items', 'categories'));
    }
}
