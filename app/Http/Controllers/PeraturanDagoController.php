<?php

namespace App\Http\Controllers;
use App\Models\PeraturanDago;
use Illuminate\Http\Request;

class PeraturanDagoController extends Controller
{
    public function index()
    {
        $peraturandagos = PeraturanDago::all();
        return view('peraturans2.index', compact('peraturandagos'));
    }
    public function create()
{
    return view('peraturans2.create');
}

public function store(Request $request)
{
    PeraturanDago::create([
        'isi' => $request->isi
    ]);

    return redirect()->route('peraturans2.index')->with('success', 'Peraturan berhasil ditambahkan.');
}
public function edit($id)
{
    $peraturans2 = PeraturanDago::findOrFail($id);
    return view('peraturans2.edit', compact('peraturans2'));
}

public function update(Request $request, $id)
{
    $peraturans2 = PeraturanDago::findOrFail($id);
    $peraturans2->update([
        'isi' => $request->isi
    ]);

    return redirect()->route('peraturans2.index')->with('success', 'peraturans2 berhasil diperbarui.');
}

public function destroy($id)
{
    $peraturans2 = PeraturanDago::findOrFail($id);
    $peraturans2->delete();

    return redirect()->route('peraturans2.index')->with('success', 'peraturans2 berhasil dihapus.');
}
}
