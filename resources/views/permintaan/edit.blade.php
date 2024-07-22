@extends('layouts.app')

@section('title', 'Edit Permintaan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('permintaan.index') }}">Data Permintaan</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('permintaan.update', $permintaan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_permintaan">No Permintaan</label>
                        <input type="text" name="no_permintaan" class="form-control" id="no_permintaan" value="{{ $permintaan->no_permintaan }}" required>
                        @if($errors->has('no_permintaan'))
                            <div class="text-danger">
                                {{ $errors->first('no_permintaan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $permintaan->nama_barang }}" required>
                        @if($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{ $permintaan->jumlah }}" required>
                        @if($errors->has('jumlah'))
                            <div class="text-danger">
                                {{ $errors->first('jumlah') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tanggal_permintaan">Tanggal Permintaan</label>
                        <input type="text" name="tanggal_permintaan" class="form-control" id="tanggal_permintaan" value="{{ $permintaan->tanggal_permintaan }}" required>
                        @if($errors->has('tanggal_permintaan'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal_permintaan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="Sudah disetujui" @if ($permintaan->status == 'Sudah disetujui') selected @endif>Sudah Disetujui</option>
                            <option value="Belum disetujui" @if ($permintaan->status == 'Belum disetujui') selected @endif>Belum Disetujui</option>
                        </select>
                        @if($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status') }}
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
