@extends('layouts.app')

@section('title', 'Edit Pengiriman')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pengiriman.index') }}">Data Pengiriman</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pengiriman.update', $pengiriman->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_pengiriman">No Pengiriman</label>
                        <input type="text" name="no_pengiriman" class="form-control" id="no_pengiriman" value="{{ $pengiriman->no_pengiriman }}" required>
                        @if($errors->has('no_pengiriman'))
                            <div class="text-danger">
                                {{ $errors->first('no_pengiriman') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="no_permintaan">No Permintaan</label>
                        <input type="text" name="no_permintaan" class="form-control" id="no_permintaan" value="{{ $pengiriman->no_permintaan }}" required>
                        @if($errors->has('no_permintaan'))
                            <div class="text-danger">
                                {{ $errors->first('no_permintaan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $pengiriman->nama_barang }}" required>
                        @if($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{ $pengiriman->jumlah }}" required>
                        @if($errors->has('jumlah'))
                            <div class="text-danger">
                                {{ $errors->first('jumlah') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tanggal_kirim">Tanggal Kirim</label>
                        <input type="text" name="tanggal_kirim" class="form-control" id="tanggal_kirim" value="{{ $pengiriman->tanggal_kirim }}" required>
                        @if($errors->has('tanggal_kirim'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal_kirim') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="Sudah dikirim" @if ($pengiriman->status == 'Sudah dikirim') selected @endif>Sudah Dikirim</option>
                            <option value="Belum dikirim" @if ($pengiriman->status == 'Belum dikirim') selected @endif>Belum Dikirim</option>
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
