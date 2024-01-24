<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ActionController extends Controller
{
    public function index()
    {
        $items = Action::all();

        // modal yang akan muncul saat kita akan menghapus data
        $title = 'Hapus Aksi!';
        $text = "Apakah kamu yakin ingin menghapus data ini?";
        confirmDelete($title, $text);

        return view('pages.dashboard.action.action', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.dashboard.action.add-action');
    }

    public function store(Request $request)
    {
        $request->validate([
            'action_name' => 'required|min:3',
            'action_icon' => 'required|image|mimes:png,jpg,svg,jpeg,web|max:1024',
            'action_description' => 'required|min:3'
        ]);

        $iconPath = $request->file('action_icon')->store('action', 'public');

        Action::create([
            'user_id' => Auth::user()->id,
            'action_name' => $request->input('action_name'),
            'action_icon' => $iconPath,
            'action_description' => $request->input('action_description')
        ]);

        // Session::flash('message', 'Berhasil Menambahkan Data Aksi');
        Alert::success('Hore!', 'Berhasil Menambahkan Aksi!');
        return redirect()->route('action.index');
    }

    public function edit($id)
    {
        $action = Action::find($id);

        if (!$action) {
            // Session::flash('error', 'Data Aksi Tidak Ditemukan!');
            Alert::error('Error', 'Data aksi tidak ditemukan!');
            return redirect()->route('action.index');
        } else {
            return view('pages.dashboard.action.edit-action', [
                'action' => $action
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $action = Action::findOrFail($id);

        $request->validate([
            'action_name' => 'required|min:3',
            'action_description' => 'required|min:3'
        ]);

        // Bila user mengisikan gambar baru
        if ($request->hasFile('action_icon')) {
            $request->validate([
                'action_icon' => 'image|mimes:png,jpg,svg,jpeg,web|max:1024'
            ]);

            // Hapus gambar lama
            Storage::disk('public')->delete($action->action_icon);

            $actionPath = $request->file('action_icon')->store('action', 'public');
            $action->action_icon = $actionPath;
        }

        $action->update([
            'action_name' => $request->input('action_name'),
            'action_description' => $request->input('action_description')
        ]);

        Alert::success('Hore', 'Berhasil Mengupdate Aksi!');
        return redirect()->route('action.index');
    }

    public function destroy($id)
    {
        $action = Action::findOrFail($id);

        Storage::disk('public')->delete($action->action_icon);

        $action->delete();

        // Session::flash('message', 'Berhasil Menghapus Aksi!');
        Alert::success('Hore!', 'Aksi berhasil dihapus!');
        return back();
    }
}
