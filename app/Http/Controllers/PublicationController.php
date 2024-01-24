<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.publication');
    }

    public function detail()
    {
        return view('pages.publication-detail');
    }
}
