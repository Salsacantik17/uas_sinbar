@extends('layouts.app')

@section('title', 'Data Supplier')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Supplier</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('supplier.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Supplier</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>ID</th>
            <th>Nama Supplier</th>
            <th>Kategori</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($supplier as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->id }}</td>
                          <td>{{ $row->nama_supplier }}</td>
                          <td>{{ $row->kategori }}</td>
                          <td>{{ $row->no_telepon }}</td>
                          <td>{{ $row->alamat }}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('supplier.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('supplier.delete', $row->id) }}">
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

@include('supplier.modal-delete')

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
