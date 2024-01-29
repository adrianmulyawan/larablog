<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::orderBy('created_at', 'DESC')->paginate(5);
        return view('pages.project', compact('projects'));
    }

    public function detail($slug)
    {
        $project = Project::with(['user'])->where('project_slug', $slug)->firstOrFail();
        // dd($project);
        return view('pages.project-detail', compact('project'));
    }

    public function registerProject($slug)
    {
        $project = Project::where('project_slug', $slug)->firstOrFail();

        if (!$project) {
            Alert::error('Error', 'Gagal mendaftar sebagai volunteer!');
            return redirect()->route('project');
        } else {
            return view('pages.project-register', compact('project'));
        }
    }

    public function registerProjectProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone_number' => 'required|min:10'
        ]);

        $data = $request->all();
        Volunteer::create($data);

        Alert('Sukses!', 'Selamat anda berhasil mendaftar sebagai volunteer');
        return redirect()->route('register-project-success');
    }

    public function successRegister(Request $request)
    {
        return view('pages.project-success-regis');
    }
}
