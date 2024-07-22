@extends('layouts.app')

@section('title', 'Edit Supplier')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Data Supplier</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" value="{{ $supplier->nama_supplier }}" required>
                        @if($errors->has('nama_supplier'))
                            <div class="text-danger">
                                {{ $errors->first('nama_supplier') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" id="kategori">
                            <option value="Umum" @if ($supplier->kategori == 'Umum') selected @endif>Umum</option>
                            <option value="Tidak Umum" @if ($supplier->kategori == 'Tidak Umum') selected @endif>Tidak Umum</option>
                        </select>
                        @if($errors->has('kategori'))
                            <div class="text-danger">
                                {{ $errors->first('kategori') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ $supplier->no_telepon }}" required>
                        @if($errors->has('no_telepon'))
                            <div class="text-danger">
                                {{ $errors->first('no_telepon') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $supplier->alamat }}" required>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
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
