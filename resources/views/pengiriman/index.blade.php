@extends('layouts.app')

@section('title', 'Data Pengiriman')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Pengiriman</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('pengiriman.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Pengiriman Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>No Pengiriman</th>
            <th>No Permintaan</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Kirim</th>
            <th>Status</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($pengiriman as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->no_pengiriman }}</td>
                          <td>{{ $row->no_permintaan }}</td>
                          <td>{{ $row->nama_barang }}</td>
                          <td>{{ $row->jumlah }}</td>
                          <td>{{ $row->tanggal_kirim}}</td>
                          <td>{{ $row->status }}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('pengiriman.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('pengiriman.delete', $row->id) }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@include('pengiriman.modal-delete')

@if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif

@if(session('error'))
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif
@endsection


@push('script')

<script>
  $('.table').DataTable()
</script>
@endpush
