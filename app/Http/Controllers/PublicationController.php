<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(Request $request)
    {
        $items = Publication::with(['user'])->orderBy('created_at', 'DESC')->paginate(12);
        return view('pages.publication', compact('items'));
    }

    public function detail($slug)
    {
        $data = Publication::where('publication_slug', $slug)->firstOrFail();
        $items = Publication::with(['user'])->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('pages.publication-detail', compact('data', 'items'));
    }
}
