<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\News;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Target;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $actions = Action::all();
        $targets = Target::all();

        $recentNews = News::with(['user'])->orderBy('created_at', 'DESC')->limit(3)->get();
        $newEvent = Project::orderBy('created_at', 'DESC')->limit(1)->get();
        $recentPublication = Publication::with(['user'])->orderBy('created_at', 'DESC')->limit(3)->get();

        $testimonials = Testimonial::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('pages.home', compact(
            'actions',
            'targets',
            'recentNews',
            'newEvent',
            'recentPublication',
            'testimonials'
        ));
    }
}
