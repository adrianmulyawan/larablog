<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function index()
    {
        $items = News::with(['newsCategory'])->paginate(5);

        $title = 'Hapus Berita!';
        $data = 'Apakah anda yakin ingin menghapus data ini?';
        confirmDelete($title, $data);

        return view('pages.dashboard.news.news', compact('items'));
    }

    public function create()
    {
        $newsCategories = NewsCategory::all();
        return view('pages.dashboard.news.add-news', compact('newsCategories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'news_name' => 'required',
                'news_header_image' => 'required|image|mimes:png,jpg|max:1024',
                'news_image' => 'required|image|mimes:png,jpg|max:1024',
                'news_image_source' => 'required',
                'news_body' => 'required',
                'news_author' => 'required',
            ]);

            // dd($request->file('news_header_image'));

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['news_slug'] = Str::slug($request->input('news_name'));
            $data['news_uploader'] = Auth::user()->username;
            $data['news_header_image'] = $request->file('news_header_image')->store('news_header', 'public');
            $data['news_image'] = $request->file('news_image')->store('news_image', 'public');

            News::create($data);

            Alert::success('Hore!', 'Berhasil menambahkan berita!');
            return redirect()->route('news.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat menambahkan berita!');
            return back();
        }
    }

    public function edit($id)
    {
        $news = News::find($id);
        $newsCategories = NewsCategory::all();

        if (!$news) {
            Alert::error('Error!', 'Data berita tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.news.edit-news', compact('news', 'newsCategories'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $news = News::findOrFail($id);

            $request->validate([
                'news_name' => 'required',
                'news_image_source' => 'required',
                'news_body' => 'required',
                'news_author' => 'required',
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['news_slug'] = Str::slug($request->input('news_name'));
            $data['news_uploader'] = Auth::user()->username;

            if ($request->hasFile('news_header_image')) {
                $request->validate([
                    'news_header_image' => 'required|image|mimes:png,jpg|max:1024',
                ]);

                Storage::disk('public')->delete($news->news_header_image);

                $actionPath = $request->file('news_header_image')->store('news_header', 'public');
                $data['news_header_image'] = $actionPath;
            }

            if ($request->hasFile('news_image')) {
                $request->validate([
                    'news_image' => 'required|image|mimes:png,jpg|max:1024',
                ]);

                Storage::disk('public')->delete($news->news_image);

                $actionPath =  $request->file('news_image')->store('news_image', 'public');
                $data['news_image'] = $actionPath;
            }

            $news->update($data);

            Alert::success('Hore!', 'Berhasil mengupdate berita!');
            return redirect()->route('news.index');
        } catch (\Throwable $th) {
            Alert::error('Error!', 'Terjadi kesalahan saat menambahkan berita!');
            return back();
        }
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        Storage::disk('public')->delete($news->news_header_image);
        Storage::disk('public')->delete($news->news_image);

        $news->delete();
        Alert::success('Hore!', 'Berita berhasil dihapus!');
        return back();
    }
}
