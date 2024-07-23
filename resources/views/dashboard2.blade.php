@extends('layouts.app')

@section('title', 'Dashoard')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</a></li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $jumlahSupplier }}</h3>

          <p>Supplier</p>
        </div>
        <div class="icon">
          <i class="fas fa-truck"></i>
        </div>
        <a href="{{ route('supplier.index') }}" class="small-box-footer"> <i class="fas fa-angle-up"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $totalJumlahSemuaBarang }}</h3>

          <p>Stok Barang</p>
        </div>
        <div class="icon">
          <i class="fas fa-boxes"></i>
        </div>
        <a href="{{ route('dbarang.index') }}" class="small-box-footer"> <i class="fas fa-angle-up"></i></a>
      </div>
    </div>
</div>
@endsection

@push('script')
<script>
  $('.table').DataTable()
</script>
@endpush