<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VolunteerController extends Controller
{
    public function index()
    {
        $items = Project::paginate(5);

        foreach ($items as $item) {
            $item->formatted_project_date = Carbon::createFromFormat('Y-m-d', $item->project_date)->format('d F Y');
        }

        return view('pages.dashboard.volunteer.volunteer', compact('items'));
    }

    public function show($id)
    {
        $project = Project::find($id);

        if (!$project) {
            Alert::error('Error!', 'Data tidak ditemukan!');
            return back();
        } else {
            $volunteers = Volunteer::with(['project'])->where('project_id', $id)->paginate(10);
            // dd($volunteers);
            return view('pages.dashboard.volunteer.show-volunteer', compact('project', 'volunteers'));
        }
    }
}
