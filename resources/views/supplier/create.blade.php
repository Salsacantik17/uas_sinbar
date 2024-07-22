@extends('layouts.app')

@section('title', 'Tambah Supplier Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Supplier Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('supplier.index') }}">Data Supplier</a></li>
                <li class="active">Tambah Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Supplier Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Supplier:</label>
                        <input type="text" name="nama_supplier" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ketegori</label>
                        <select name="kategori" class="form-control">
                            <option value="Umum">Umum</option>
                            <option value="Tidak Umum">Tidak Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon:</label>
                        <input type="text" name="no_telepon" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat:</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
