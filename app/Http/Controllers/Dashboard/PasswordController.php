<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.settings.change-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        if (!Hash::check($request->input('current_password'), Auth::user()->password)) {

            Alert::error('Error!', 'Your current password does not match with our record!');
            return back();
        }

        Auth::user()->update([
            'password' => bcrypt($request->input('password'))
        ]);

        Alert::success('Hore!', 'Berhasil mengupdate password!');
        return back();
    }
}
