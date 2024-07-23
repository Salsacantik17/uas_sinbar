<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    DashboardController,
    PegawaiController,
    BarangController,
    SupplierController,
    PenggunaController,
    PengirimanController,
    PermintaanController,
    TransaksiController,
};
use App\Models\Barang;
use App\Models\Permintaan;

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::group([
    'middleware' => ['auth', 'role:admin,karyawan']
], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/pegawai', PegawaiController::class)->except(['show']);
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
    Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');

    Route::resource('/barang', BarangController::class)->except(['show']);
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.delete');
    Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');

    Route::resource('/supplier', SupplierController::class)->except(['show']);
    Route::delete('/supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.delete');
    Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');

    Route::resource('/transaksi', TransaksiController::class)->except(['show']);
    Route::get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.delete');

    Route::resource('/permintaan', PermintaanController::class)->except(['show']);
    Route::get('/permintaan/{permintaan}/edit', [PermintaanController::class, 'edit'])->name('permintaan.edit');
    Route::delete('/permintaan/{id}', [PermintaanController::class, 'destroy'])->name('permintaan.delete');
    
    Route::resource('/pengiriman', PengirimanController::class)->except(['show']);
    Route::get('/pengiriman/{pengiriman}/edit', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
    Route::delete('/pengiriman/{id}', [PengirimanController::class, 'destroy'])->name('pengiriman.delete');


    Route::group([
        'middleware' => 'role:admin'
    ], function () {

    });
});
