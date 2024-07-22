@extends('layouts.app')

@section('title', 'Tambah Barang Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Barang Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('barang.index') }}">Data Barang</a></li>
                <li class="active">Tambah Barang Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Barang Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Barang:</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Satuan:</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="gr">gr</option>
                            <option value="pcs">pcs</option>
                        </select>
                    </div> 
                
                    <div class="form-group">
                        <label>Ketegori:</label>
                        <input type="text" name="kategori" class="form-control" required>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
