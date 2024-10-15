@extends('layouts.app')

@section('title', 'Kwitansi Pemasukan')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pemasukan Pembayaran Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Pemasukan</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Form Pemasukan -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pemasukan</h3>
                </div>
                <form action="{{ route('proses-pemasukan') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_uang">Jumlah Uang</label>
                                    <input type="number" step="0.01" id="jumlah_uang" name="jumlah_uang"
                                        class="form-control" required>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="peruntukan">Peruntukan</label>
                                    <input type="text" id="peruntukan" name="peruntukan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <input type="number" id="semester" name="semester" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="angkatan">Angkatan</label>
                                    <input type="number" id="angkatan" name="angkatan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="cara_bayar">Cara Bayar</label>
                                    <input type="text" id="cara_bayar" name="cara_bayar" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


            <!-- History Pembayaran -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Pembayaran</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jumlah Uang</th>
                                <th>Peruntukan</th>
                                <th>Semester</th>
                                <th>Angkatan</th>
                                <th>Cara Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasukan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nama_mahasiswa }}</td>
                                <td>{{ $item->jumlah_uang }}</td>
                                <td>{{ $item->peruntukan }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ $item->cara_bayar }}</td>
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