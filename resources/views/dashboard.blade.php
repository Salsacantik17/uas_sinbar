@extends('layouts.app')

@section('title', 'Dashboard')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-lightblue">
                <div class="inner">
                    <h3>3</h3>
                    <p>Supplier</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <a href="{{ route('supplier.index') }}" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>50</h3>
                    <p>Barang</p>
                </div>
                <div class="icon">
                    <i class="fas fa-boxes"></i>
                </div>
                <a href="{{ route('barang.index') }}" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>5</h3>
                    <p>Pegawai</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('pegawai.index') }}" class="small-box-footer"><i class="fas fa-angle-up"></i></a>
            </div>
        </div>
        <!-- ./col -->
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-lg-12">
            <!-- Tabel Daftar Barang -->
            {{-- <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jumlahBarang as $barang)
                                <tr>
                                    <td>{{ $barang->id }}</td>
                                    <td>{{ $barang->kd_barang }}</td>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->kategoribarang->nama_kategori }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->harga_beli }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div> --}}
@endsection

@push('script')

<script>

</script>
@endpush