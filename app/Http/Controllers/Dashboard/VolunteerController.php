<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.volunteer.volunteer');
    }

    public function show()
    {
        return view('pages.dashboard.volunteer.show-volunteer');
    }
}
