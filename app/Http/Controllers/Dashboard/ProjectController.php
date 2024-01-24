<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.project.project');
    }

    public function create()
    {
        return view('pages.dashboard.project.add-project');
    }
}
