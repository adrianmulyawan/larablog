<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.settings.setting');
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|min:3',
                'username' => 'required|min:6|unique:users,username,' . Auth::user()->id,
                'email' => 'required|email|unique:users,email,' . Auth::user()->id,
                'phone_number' => 'required'
            ]);

            $data = $request->all();

            Auth::user()->update($data);

            Alert::success('Hore!', 'Berhasil update profile user!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }
}
