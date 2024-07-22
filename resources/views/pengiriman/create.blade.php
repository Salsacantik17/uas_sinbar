@extends('layouts.app')

@section('title', 'Tambah Pengiriman Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Pengiriman Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('pengiriman.index') }}">Data Pengiriman</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Pengiriman Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('pengiriman.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>No Pengiriman:</label>
                        <input type="text" name="no_pengiriman" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>No Permintaan:</label>
                        <input type="text" name="no_permintaan" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>Nama Barang:</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah:</label>
                        <input type="text" name="jumlah" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kirim:</label>
                        <input type="datetime-local" name="tanggal_kirim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <select name="status" class="form-control">
                            <option value="Sudah dikirim">Sudah Dikirim</option>
                            <option value="Belum dikirim">Belum Dikirim</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
