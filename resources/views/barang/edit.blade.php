@extends('layouts.app')

@section('title', 'Edit Barang')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Data Barang</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}" required>
                        @if($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select name="satuan" class="form-control" id="satuan">
                            <option value="gr" @if ($barang->gr == 'gr') selected @endif>gr</option>
                            <option value="pcs" @if ($barang->pcs == 'pcs') selected @endif>pcs</option>
                        </select>
                        @if($errors->has('satuan'))
                            <div class="text-danger">
                                {{ $errors->first('satuan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $barang->kategori }}" required>
                        @if($errors->has('kategori'))
                            <div class="text-danger">
                                {{ $errors->first('kategori') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@endpush
