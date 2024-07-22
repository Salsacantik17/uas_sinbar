@extends('layouts.app')

@section('title', 'Edit Transaksi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('transaksi.index') }}">Data Transaksi</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="{{ $transaksi->kode_barang }}" required>
                        @if($errors->has('kode_barang'))
                            <div class="text-danger">
                                {{ $errors->first('kode_barang') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{ $transaksi->jumlah }}" required>
                        @if($errors->has('jumlah'))
                            <div class="text-danger">
                                {{ $errors->first('jumlah') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input type="datetime-local" name="tanggal_transaksi" class="form-control" id="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" required>
                        @if($errors->has('tanggal_transaksi'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal_transaksi') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="text" name="kode_supplier" class="form-control" id="kode_supplier" value="{{ $transaksi->kode_supplier }}" required>
                        @if($errors->has('kode_supplier'))
                            <div class="text-danger">
                                {{ $errors->first('kode_supplier') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input type="text" name="NIP" class="form-control" id="NIP" value="{{ $transaksi->NIP }}" required>
                        @if($errors->has('NIP'))
                            <div class="text-danger">
                                {{ $errors->first('NIP') }}
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
