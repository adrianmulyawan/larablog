<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $items = Project::paginate(5);

        foreach ($items as $item) {
            $item->formatted_project_date = Carbon::createFromFormat('Y-m-d', $item->project_date)->format('d F Y');
        }

        $title = 'Hapus Project';
        $text = 'Apakah anda yakin untuk menghapus data ini';
        confirmDelete($title, $text);

        return view('pages.dashboard.project.project', compact('items'));
    }

    public function create()
    {
        return view('pages.dashboard.project.add-project');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'project_name' => 'required|min:3',
                'project_header_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
                'project_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
                'project_description' => 'required',
                'project_location' => 'required',
                'project_date' => 'required|date',
                'project_start_time' => 'required',
                'project_registration_deadline' => 'required|date',
                'contact_person_name' => 'required',
                'contact_person_phone' => 'required',
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['project_author'] = Auth::user()->username;
            $data['project_slug'] = Str::slug($request->input('project_name'));
            $data['project_header_image'] = $request->file('project_header_image')->store('project_header', 'public');
            $data['project_image'] = $request->file('project_image')->store('project_image', 'public');

            Project::create($data);

            Alert::success('Hore!', 'Berhasil menambahkan data projek!');
            return redirect()->route('project.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat menambahkan data!');
            return back();
            // dd($th);
        }
    }

    public function edit($id)
    {
        $project = Project::find($id);

        if (!$project) {
            Alert::error('Error!', 'Data project tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.project.edit-project', compact('project'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);

            $request->validate([
                'project_name' => 'required|min:3',
                'project_description' => 'required',
                'project_location' => 'required',
                'project_date' => 'required|date',
                'project_start_time' => 'required',
                'project_registration_deadline' => 'required|date',
                'contact_person_name' => 'required',
                'contact_person_phone' => 'required',
                'is_done' => 'required',
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['project_author'] = Auth::user()->username;
            $data['project_slug'] = Str::slug($request->input('project_name'));

            $data['is_done'] = $request->input('is_done') == 'true' ? 1 : 0;
            // dd($data);

            if ($request->hasFile('project_header_image')) {
                $request->validate([
                    'project_header_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024'
                ]);

                Storage::disk('public')->delete($project->project_header_image);

                $imagePath = $request->file('project_header_image')->store('project_header', 'public');
                $data['project_header_image'] = $imagePath;
            }

            if ($request->hasFile('project_image')) {
                $request->validate([
                    'project_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024'
                ]);

                Storage::disk('public')->delete($project->project_image);

                $imagePath = $request->file('project_image')->store('project_image', 'public');
                $data['project_image'] = $imagePath;
            }

            $project->update($data);

            Alert::success('Hore!', 'Berhasil mengupdate data project!');
            return redirect()->route('project.index');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error!', 'Terjadi kesalahan saat mengupdate data!');
            return back();
            // dd($th);
        }
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        Storage::disk('public')->delete($project->project_header_image);
        Storage::disk('public')->delete($project->project_image);

        $project->delete();

        Alert::success('Hore!', 'Berhasil menghapus data project!');
        return back();
    }
}
