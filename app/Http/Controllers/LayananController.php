<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananDB3;

class LayananController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel 'layanan'
        $layanans = LayananDB3::all();

        return view('admin.layanan.index', compact('layanans')); // Pastikan variabel $layanans dikirim ke view
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'durasi' => 'required|string|max:50',
            'harga' => 'required|integer',
        ]);

        LayananDB3::create($request->all());

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit($id)
{
    $layanan = LayananDB3::findOrFail($id);
    return view('admin.layanan.edit', compact('layanan'));
}

public function update(Request $request, $id)
{
    $layanan = LayananDB3::findOrFail($id);

    $request->validate([
        'kategori' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'durasi' => 'required|string|max:100',
    ]);

    $layanan->update([
        'kategori' => $request->kategori,
        'nama' => $request->nama,
        'harga' => $request->harga,
        'durasi' => $request->durasi,
    ]);

    return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diperbarui');
}

public function destroy($id)
{
    $layanan = LayananDB3::findOrFail($id);
    $layanan->delete();

    return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus.');
}

}
