<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PublicationCategoryController extends Controller
{
    public function index()
    {
        $items = PublicationCategory::all();

        $title = 'Hapus Kategori Publikasi!';
        $text = 'Apakah anda yakin untutk menghapus data ini?';
        confirmDelete($title, $text);

        return view('pages.dashboard.publication-category.publication-category', compact('items'));
    }

    public function create()
    {
        return view('pages.dashboard.publication-category.add-publication-category');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'publication_category_name' => 'required|min:3'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['publication_category_slug'] = Str::slug($request->input('publication_category_name'));

            PublicationCategory::create($data);

            Alert::success('Hore!', 'Berhasil menambahkan kategori publikasi!');
            return redirect()->route('publication.category.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat menambahkan data!');
            return back();
        }
    }

    public function edit($id)
    {
        $category = PublicationCategory::find($id);

        if (!$category) {
            Alert::error('Error!', 'Kategori publikasi tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.publication-category.edit-publication-category', compact('category'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $category = PublicationCategory::findOrFail($id);

            $request->validate([
                'publication_category_name' => 'required'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['publication_category_slug'] = Str::slug($request->input('publication_category_name'));

            $category->update($data);

            Alert::success('Hore!', 'Berhasil mengupdate kategori publikasi!');
            return redirect()->route('publication.category.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi kesalahan pada saat mengupdate data!');
            return back();
        }
    }

    public function destroy($id)
    {
        $category = PublicationCategory::find($id);

        if (!$category) {
            Alert::error('Error!', 'Kategori publikasi tidak ditemukan!');
            return back();
        } else {
            $category->delete();

            Alert::success('Hore!', 'Kategori publikasi berhasil dihapus!');
            return back();
        }
    }
}
