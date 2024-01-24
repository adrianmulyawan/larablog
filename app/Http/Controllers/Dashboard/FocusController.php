<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FocusController extends Controller
{
    public function index()
    {
        $items = Target::all();

        // modal yang akan muncul saat kita akan menghapus data
        $title = 'Hapus Fokus!';
        $text = "Apakah kamu yakin ingin menghapus data ini?";
        confirmDelete($title, $text);

        return view('pages.dashboard.focus.focus', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.dashboard.focus.add-focus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'target_name' => 'required|min:3',
            'target_description' => 'required|min:3'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'target_name' => $request->input('target_name'),
            'target_description' => $request->input('target_description')
        ];

        Target::create($data);

        Alert::success('Hore', 'Berhasil menambahkan data focus');
        return redirect()->route('focus.index');
    }

    public function edit($id)
    {
        $target = Target::find($id);

        if (!$target) {
            Alert::error('Error', 'Data fokus tidak ditemukan');
            return back();
        } else {
            return view('pages.dashboard.focus.edit-focus', [
                'target' => $target
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $target = Target::findOrFail($id);

        $request->validate([
            'target_name' => 'required|min:3',
            'target_description' => 'required|min:3'
        ]);

        $data = [
            'target_name' => $request->input('target_name'),
            'target_description' => $request->input('target_description')
        ];

        $target->update($data);

        Alert::success('Hore', 'Berhasil mengupdate focus!');
        return redirect()->route('focus.index');
    }

    public function destory($id)
    {
        $target = Target::findOrFail($id);

        $target->delete();

        Alert::success('Hore', 'Fokus behasil dihapus!');
        return back();
    }
}
