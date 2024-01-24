<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $items = NewsCategory::get();

        // Untuk confirm hapus data
        $title = 'Hapus Kateogri!';
        $text = 'Apakah anda yakin untuk menghapus data ini?';
        confirmDelete($title, $text);

        return view('pages.dashboard.news-category.news-category', compact('items'));
    }

    public function create()
    {
        return view('pages.dashboard.news-category.add-news-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'news_category_name' => 'required'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'news_category_name' => $request->input('news_category_name'),
            'news_category_slug' => Str::slug($request->input('news_category_name'))
        ];

        NewsCategory::create($data);

        Alert::success('Hore!', 'Berhasil menambahkan kategori berita!');
        return redirect()->route('news.category.index');
    }

    public function edit($id)
    {
        $category = NewsCategory::find($id);

        if (!$category) {
            Alert::error('Error', 'Kategori berita tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.news-category.edit-news-category', compact('category'));
        }
    }

    public function update(Request $request, $id)
    {
        $category = NewsCategory::findOrFail($id);

        $request->validate([
            'news_category_name' => 'required'
        ]);

        $category->update([
            'user_id' => Auth::user()->id,
            'news_category_name' => $request->input('news_category_name'),
            'news_category_slug' => Str::slug($request->input('news_category_name')),
        ]);

        Alert::success('Hore!', 'Berhasil mengupdate kategori berita!');
        return redirect()->route('news.category.index');
    }

    public function destroy($id)
    {
        $category = NewsCategory::findOrFail($id);

        $category->delete();

        // Session::flash('message', 'Berhasil Menghapus Aksi!');
        Alert::success('Hore!', 'Kategori berhasil dihapus!');
        return back();
    }
}
