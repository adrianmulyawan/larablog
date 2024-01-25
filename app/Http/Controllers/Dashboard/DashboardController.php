<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Project;
use App\Models\Publication;
use App\Models\PublicationCategory;
use App\Models\User;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalUsers = User::count();
        $totalUserSuperAdmin = User::where('role', 'SUPER_ADMIN')->count();
        $totalUserAdmin = User::where('role', 'ADMIN')->count();

        $totalNews = News::count();
        $totalPublication = Publication::count();
        $totalProject = Project::count();
        $totalVolunteer = Volunteer::count();

        $totalCategoryNews = NewsCategory::count();
        $totalCategoryPublication = PublicationCategory::count();

        $latestProjects = Project::orderBy('created_at', 'DESC')->limit(3)->get();
        // dd($latestProjects);
        foreach ($latestProjects as $item) {
            $item->formatted_project_date = Carbon::createFromFormat('Y-m-d', $item->project_date)->format('d F Y');
        }

        $latestUsers = User::orderBy('created_at', 'DESC')->limit(5)->get();

        $latestNews = News::with(['user', 'newsCategory'])->orderBy('created_at', 'DESC')->limit(3)->get();

        $latestPublications = Publication::with(['user', 'publicationCategory'])->orderBy('created_at', 'DESC')->limit(3)->get();

        return view('pages.dashboard.dashboard', compact(
            'totalUsers',
            'totalUserSuperAdmin',
            'totalUserAdmin',
            'totalNews',
            'totalPublication',
            'totalProject',
            'totalVolunteer',
            'totalCategoryNews',
            'totalCategoryPublication',
            'latestProjects',
            'latestUsers',
            'latestNews',
            'latestPublications'
        ));
    }
}
