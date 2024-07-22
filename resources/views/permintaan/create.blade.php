@extends('layouts.app')

@section('title', 'Tambah Permintaan Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Permintaan Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('permintaan.index') }}">Data Permintaan</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Permintaan Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label>Tanggal Permintaan:</label>
                        <input type="datetime-local" name="tanggal_permintaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <select name="status" class="form-control">
                            <option value="Sudah disetujui">Sudah Disetujui</option>
                            <option value="Belum disetujui">Belum Disetujui</option>
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
