@extends('layouts.app')

@section('title', 'Tambah Transaksi Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Transaksi Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('transaksi.index') }}">Data Transaksi</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Transaksi Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Kode Barang:</label>
                        <input type="text" name="kode_barang" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah:</label>
                        <input type="text" name="jumlah" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Transaksi:</label>
                        <input type="datetime-local" name="tanggal_transaksi" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Kode Supplier:</label>
                        <input type="text" name="kode_supplier" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>NIP:</label>
                        <input type="text" name="NIP" class="form-control">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
