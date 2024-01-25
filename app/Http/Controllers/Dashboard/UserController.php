<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::where('role', 'ADMIN')->paginate(10);

        $title = 'Hapus User!';
        $text = 'Apakah anda yakin untuk menghapus data ini?';
        confirmDelete($title, $text);

        return view('pages.dashboard.user.user', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:6|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone_number' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->input('password'));

        User::create($data);

        Alert::success('Hore!', 'Berhasil menambahkan user baru!');
        return redirect()->route('user.index');
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
        $user = User::find($id);

        if (!$user) {
            Alert::error('Error!', 'Data user tidak ditemukan!');
            return back();
        } else {
            return view('pages.dashboard.user.edit-user', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:6|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required'
        ]);

        $data = $request->all();

        // Periksa apakah password baru disediakan
        $data['password'] = $request->has('password') ? bcrypt($request->input('password')) : $user->password;

        $user->update($data);

        Alert::success('Hore!', 'Data user berhasil diubah!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Alert::success('Hore!', 'Data user berhasil dihapus!');
        return back();
    }
}
