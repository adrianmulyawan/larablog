<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    public function index()
    {
        $items = Publication::with(['publicationCategory'])->paginate(5);

        $title = 'Hapus Publikasi!';
        $name = 'Apakah anda yakin untuk menghapus data ini?';
        confirmDelete($title, $name);

        return view('pages.dashboard.publication.publication', compact('items'));
    }

    public function create()
    {
        $categories = PublicationCategory::all();

        return view('pages.dashboard.publication.add-publication', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'publication_name' => 'required|min:3',
                'publication_body' => 'required|min:3',
                'publication_header_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
                'publication_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
                'publication_author' => 'required',
                'publication_url_download' => 'required',
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['publication_slug'] = Str::slug($request->input('publication_name'));
            $data['publication_header_image'] = $request->file('publication_header_image')->store('publication_header', 'public');
            $data['publication_image'] = $request->file('publication_image')->store('publication_image', 'public');
            $data['publication_uploader'] = Auth::user()->username;

            Publication::create($data);

            Alert::success('Hore!', 'Berhasil menambahkan publikasi!');
            return redirect()->route('publication.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat menambahkan publikasi!');
        }
    }

    public function edit($id)
    {
        $publication = Publication::find($id);
        $categories = PublicationCategory::all();

        if (!$publication) {
            Alert::error('Error!', 'Data publikasi tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.publication.edit-publication', compact('publication', 'categories'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $publication = Publication::findOrFail($id);

            $request->validate([
                'publication_name' => 'required|min:3',
                'publication_body' => 'required|min:3',
                // 'publication_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
                'publication_author' => 'required',
                'publication_url_download' => 'required',
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['publication_slug'] = Str::slug($request->input('publication_name'));
            $data['publication_uploader'] = Auth::user()->username;

            if ($request->hasFile('publication_header_image')) {
                $request->validate([
                    'publication_header_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024'
                ]);

                Storage::disk('public')->delete($publication->publication_header_image);

                $actionPath = $request->file('publication_header_image')->store('publication_header', 'public');
                $data['publication_header_image'] = $actionPath;
            }

            if ($request->hasFile('publication_image')) {
                $request->validate([
                    'publication_image' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024'
                ]);

                Storage::disk('public')->delete($publication->publication_image);

                $actionPath = $request->file('publication_image')->store('publication_image', 'public');
                $data['publication_image'] = $actionPath;
            }

            $publication->update($data);

            Alert::success('Hore!', 'Berhasil mengupdate publikasi!');
            return redirect()->route('publication.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat mengupdate data!');
            return back();
        }
    }

    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);

        Storage::disk('public')->delete($publication->publication_header_image);
        Storage::disk('public')->delete($publication->publication_image);

        $publication->delete();

        Alert::success('Hore!', 'Publikasi berhasil dihapus!');
        return back();
    }
}
