<?php
// app/Http/Controllers/PegawaiController.php

// app/Http/Controllers/PegawaiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = User::all();

        return view('pegawai.index', compact('pegawai'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Tambahkan validasi untuk data lain yang ingin di-update
        ]);

        $pegawai = User::findOrFail($id);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui.');
    }

    public function edit($id)
    {
        $pegawai = User::findOrFail($id);
    return view('pegawai.edit', compact('pegawai'));
    }

    public function destroy($id)
    {
        $pegawai = User::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Konfirmasi password harus sesuai
            // Tambahkan validasi untuk data lain yang ingin di-input
        ]);

        $pegawaiData = $request->except('password', 'password_confirmation');
        $pegawaiData['password'] = Hash::make($request->password);

        User::create($pegawaiData);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai baru berhasil ditambahkan.');
    }
}
