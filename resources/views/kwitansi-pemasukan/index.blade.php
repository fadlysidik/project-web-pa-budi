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
                    <h1>Form Print Kwitansi Pengeluaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Print Kwitansi Pengeluaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Form Kwitansi -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Print Kwitansi</h3>
                </div>
                <form action="{{ route('kwitansi-pemasukan.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nomor">Nomor</label>
                                <input type="text" id="nomor" name="nomor" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="diterima_dari">Diterima Dari</label>
                                <input type="text" id="diterima_dari" name="diterima_dari" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="angkatan_semester">Angkatan/Semester</label>
                                <input type="text" id="angkatan_semester" name="angkatan_semester" class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jumlah_uang">Jumlah Uang</label>
                                <input type="number" step="0.01" id="jumlah_uang" name="jumlah_uang"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="untuk_pembayaran">Untuk Pembayaran</label>
                                <input type="text" id="untuk_pembayaran" name="untuk_pembayaran" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="perincian">Perincian</label>
                                <input type="text" id="perincian" name="perincian" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- History Kwitansi -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Kwitansi Pengeluaran</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor</th>
                                <th>Diterima Dari</th>
                                <th>Angkatan/Semester</th>
                                <th>Jumlah Uang</th>
                                <th>Perincian</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kwitansiPemasukan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->diterima_dari }}</td>
                                <td>{{ $item->angkatan_semester }}</td>
                                <td>{{ $item->jumlah_uang }}</td>
                                <td>{{ $item->perincian }}</td>
                                <td>{{ $item->created_at }}</td>
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