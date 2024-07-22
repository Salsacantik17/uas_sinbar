++@extends('layouts.app')

@section('title', 'Edit Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}">Data Pegawai</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
                        @if($errors->has('nama_pegawai'))
                            <div class="text-danger">
                                {{ $errors->first('nama_pegawai') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="Laki-laki" @if ($pegawai->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($pegawai->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                        @if($errors->has('jenis_kelamin'))
                            <div class="text-danger">
                                {{ $errors->first('jenis_kelamin') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" class="form-control" id="jabatan">
                            <option value="Admin" @if ($pegawai->jabatan == 'Admin') selected @endif>Admin</option>
                            <option value="Manager" @if ($pegawai->jabatan == 'Manager') selected @endif>Manager</option>
                            <option value="Supervisor" @if ($pegawai->jabatan == 'Supervisor') selected @endif>Supervisor</option>
                        </select>
                        @if($errors->has('jabatan'))
                            <div class="text-danger">
                                {{ $errors->first('jabatan') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ $pegawai->no_telepon }}" required>
                        @if($errors->has('no_telepon'))
                            <div class="text-danger">
                                {{ $errors->first('no_telepon') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $pegawai->alamat }}" required>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control-file" id="foto">
                        @if ($pegawai->foto)
                            <img src="{{ asset('storage/foto/' . $pegawai->foto) }}" alt="Foto Pegawai" class="img-thumbnail " style="max-width: 200px; ">
                        @else
                            <p class="mt-2">Tidak ada foto tersimpan.</p>
                        @endif
                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto') }}
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
