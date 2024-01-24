<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function index()
    {
        $data = Organization::find(1);

        return view('pages.dashboard.organization.organization', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.dashboard.organization.add-organization');
    }

    public function store(Request $request)
    {
        $request->validate([
            'organization_name' => 'required|min:3',
            'organization_description' => 'required|min:3',
            'organization_motto' => 'required|min:3',
            'organization_logo' => 'required|image|mimes:png,jpg,svg,webp|max:2048',
            'organization_address' => 'required|min:3',
            'organization_contact' => 'required|min:10|max:16'
        ]);

        // Menyimpan gambar
        $imagePath = $request->file('organization_logo')->store('organization_logos', 'public');

        Organization::create([
            'user_id' => Auth::user()->id,
            'organization_name' => $request->input('organization_name'),
            'organization_description' => $request->input('organization_description'),
            'organization_motto' => $request->input('organization_motto'),
            'organization_logo' => $imagePath,
            'organization_address' => $request->input('organization_address'),
            'organization_contact' => $request->input('organization_contact')
        ]);

        Session::flash('message', 'Berhasil Menambahkan Data Organisasi');
        return redirect()->route('organization.index');
    }

    public function edit($id)
    {
        $organization = Organization::find($id);

        if (!$organization) {
            Session::flash('error', 'Data Organisasi Tidak Ditemukan!');
            return redirect()->route('organization.index');
        } else {
            return view('pages.dashboard.organization.edit-organization', [
                'data' => $organization
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $organization = Organization::findOrFail($id);

        $request->validate([
            'organization_name' => 'required|min:3',
            'organization_description' => 'required|min:3',
            'organization_motto' => 'required|min:3',
            'organization_address' => 'required|min:3',
            'organization_contact' => 'required|min:3'
        ]);

        // Jika ada gambar baru diunggah, validasi dan simpan gambar baru
        if ($request->hasFile('organization_logo')) {
            $request->validate([
                'organization_logo' => 'image|mimes:png,jpg,svg,webp|max:2048',
            ]);

            // Hapus gambar lama
            Storage::disk('public')->delete($organization->organization_logo);

            // Simpan gambar baru
            $imagePath = $request->file('organization_logo')->store('organization_logos', 'public');
            $organization->organization_logo = $imagePath;
        }

        $organization->update([
            'user_id' => Auth::user()->id,
            'organization_name' => $request->input('organization_name'),
            'organization_description' => $request->input('organization_description'),
            'organization_motto' => $request->input('organization_motto'),
            'organization_address' => $request->input('organization_address'),
            'organization_contact' => $request->input('organization_contact')
        ]);

        Session::flash('message', 'Berhasil Mengupdate Data Organisasi');
        return redirect()->route('organization.index');
    }
}
