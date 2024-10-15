@extends('layouts.app')

@section('title', 'Pengeluaran')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pengeluaran Pembayaran Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Pengeluaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Menampilkan pesan sukses -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Form Pengeluaran -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pengeluaran</h3>
                </div>
                <form action="{{ route('proses-pengeluaran') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Kolom pertama -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no">No</label>
                                    <input type="number" id="no" name="no" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <input type="text" id="uraian" name="uraian" class="form-control" required>
                                </div>
                            </div>

                            <!-- Kolom kedua -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rincian">Rincian</label>
                                    <textarea id="rincian" name="rincian" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kode_akun">Kode Akun</label>
                                    <input type="text" id="kode_akun" name="kode_akun" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pengeluaran">Pengeluaran</label>
                                    <input type="number" step="0.01" id="pengeluaran" name="pengeluaran"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- History Pengeluaran -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Pengeluaran</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Uraian</th>
                                <th>Rincian</th>
                                <th>Kode Akun</th>
                                <th>Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengeluaran as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->uraian }}</td>
                                <td>{{ $item->rincian }}</td>
                                <td>{{ $item->kode_akun }}</td>
                                <td>{{ $item->pengeluaran }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection