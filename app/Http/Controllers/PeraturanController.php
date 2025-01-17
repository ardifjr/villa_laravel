<?php

namespace App\Http\Controllers;
use App\Models\Peraturan;
use Illuminate\Http\Request;
use App\Models\PeraturanDago;

class PeraturanController extends Controller
{
    public function index()
{
    $peraturans = Peraturan::all();
    return view('peraturan.index', compact('peraturans'));
}
public function indexx()
{
    $peraturans = Peraturan::all();
    $peraturandagos = PeraturanDago::all();
    return view('customers.per', compact('peraturans','peraturandagos'));
   }
public function create()
{
    return view('peraturan.create');
}

public function store(Request $request)
{
    Peraturan::create([
        'isi' => $request->isi
    ]);

    return redirect()->route('peraturan.index')->with('success', 'Peraturan berhasil ditambahkan.');
}

public function edit($id)
{
    $peraturan = Peraturan::findOrFail($id);
    return view('peraturan.edit', compact('peraturan'));
}

public function update(Request $request, $id)
{
    $peraturan = Peraturan::findOrFail($id);
    $peraturan->update([
        'isi' => $request->isi
    ]);

    return redirect()->route('peraturan.index')->with('success', 'Peraturan berhasil diperbarui.');
}

public function destroy($id)
{
    $peraturan = Peraturan::findOrFail($id);
    $peraturan->delete();

    return redirect()->route('peraturan.index')->with('success', 'Peraturan berhasil dihapus.');
}
}
