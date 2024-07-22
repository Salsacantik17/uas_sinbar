<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::all();
        return view('pengiriman.index', compact('pengiriman'));
    }

    public function create()
    {
        return view('pengiriman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pengiriman' => 'required',
            'no_permintaan' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_kirim' => 'required',
            'status' => 'required',
        ]);
        $data = $request->all();
        Pengiriman::create($data);

        return redirect()->route('pengiriman.index')->with('success', 'Pengiriman berhasil ditambahkan.');
    }

    public function edit(Pengiriman $pengiriman)
    {
        return view('pengiriman.edit', compact('pengiriman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pengiriman' => 'required',
            'no_permintaan' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_kirim' => 'required',
            'status' => 'required',
        ]);
        $pengiriman = Pengiriman::findOrFail($id);
        $data = $request->all();

        $pengiriman->update($data);
        return redirect()->route('pengiriman.index')->with('success', 'Pengiriman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::findOrFail($id);

        $pengiriman->delete();
        return redirect()->route('pengiriman.index')->with('success', 'Pengiriman berhasil dihapus.');
    }
}
