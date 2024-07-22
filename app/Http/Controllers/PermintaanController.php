<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {
        $permintaan = Permintaan::all();
        return view('permintaan.index', compact('permintaan'));
    }

    public function create()
    {
        return view('permintaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_permintaan' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_permintaan' => 'required',
            'status' => 'required',
        ]);
        $data = $request->all();
        Permintaan::create($data);

        return redirect()->route('permintaan.index')->with('success', 'Permintaan berhasil ditambahkan.');
    }

    public function edit(Permintaan $permintaan)
    {
        return view('permintaan.edit', compact('permintaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_permintaan' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_permintaan' => 'required',
            'status' => 'required',
        ]);
        $permintaan = Permintaan::findOrFail($id);
        $data = $request->all();

        $permintaan->update($data);
        return redirect()->route('permintaan.index')->with('success', 'Permintaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $permintaan = Permintaan::findOrFail($id);

        $permintaan->delete();
        return redirect()->route('permintaan.index')->with('success', 'Permintaan berhasil dihapus.');
    }


    
}
