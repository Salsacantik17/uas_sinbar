<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required',
            'kode_supplier' => 'required',
            'NIP' => 'required',
        ]);
        $data = $request->all();
        Transaksi::create($data);
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit',compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => 'required',
            'jumlah' => 'required',
            'tanggal_transaksi' => 'required',
            'kode_supplier' => 'required',
            'NIP' => 'required',
        ]);
        $transaksi = Transaksi::findOrFail($id);
        $data = $request->all();

        $transaksi->update($data);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }


}
