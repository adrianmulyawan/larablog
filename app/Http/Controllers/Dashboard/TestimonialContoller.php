<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Testimonial::paginate(10);

        $title = 'Hapus Testi!';
        $text = 'Apakah anda yakin untuk menghapus data ini?';
        confirmDelete($title, $text);

        return view('pages.dashboard.testimonial.testimonial', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.testimonial.add-testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'photo' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            'body' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['photo'] = $request->file('photo')->store('testi_user_photo', 'public');

        Testimonial::create($data);

        Alert::success('Hore!', 'Berhasil menambahkan testimonial baru!');
        return redirect()->route('testi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testi = Testimonial::find($id);

        if (!$testi) {
            Alert::error('Error!', 'Data testimonial tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.testimonial.edit-testimonial', compact('testi'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testi = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3',
            'body' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            ]);

            Storage::disk('public')->delete($testi->photo);

            $imagePath = $request->file('photo')->store('testi_user_photo', 'public');
            $data['photo'] = $imagePath;
        }

        $testi->update($data);

        Alert::success('Hore!', 'Data testimonial berhasil diupdate!');
        return redirect()->route('testi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testi = Testimonial::findOrFail($id);

        $testi->delete();
        Storage::disk('public')->delete($testi->photo);

        Alert::success('Hore!', 'Data testimonial berhasil dihapus!');
        return back();
    }
}
