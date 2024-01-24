<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.project');
    }

    public function detail(Request $request)
    {
        return view('pages.project-detail');
    }

    public function registerProject(Request $request)
    {
        return view('pages.project-register');
    }

    public function successRegister(Request $request)
    {
        return view('pages.project-success-regis');
    }
}
