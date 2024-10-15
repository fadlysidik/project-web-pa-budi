@extends('layouts.app')

@section('title', 'Database Mahasiswa')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Database Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Database Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
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

            <!-- Form Input Data Mahasiswa -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Input Data Mahasiswa</h3>
                </div>
                <form action="{{ route('proses-input-mahasiswa') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="npm">NPM</label>
                                <input type="text" id="npm" name="npm" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="semester">Semester</label>
                                <input type="number" id="semester" name="semester" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="angkatan">Angkatan</label>
                                <input type="number" id="angkatan" name="angkatan" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bayar">Bayar</label>
                                <input type="number" step="0.01" id="bayar" name="bayar" class="form-control" required>
                            </div>
                        </div>

                        <!-- Field yang Bisa Dihitung Otomatis -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kewajiban_total">Kewajiban Total</label>
                                <input type="number" step="0.01" id="kewajiban_total" name="kewajiban_total"
                                    class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="kewajiban_semester">Kewajiban Semester</label>
                                <input type="number" step="0.01" id="kewajiban_semester" name="kewajiban_semester"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sisa">Sisa</label>
                            <input type="number" step="0.01" id="sisa" name="sisa" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="2"
                                required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- History Pengisian Data Mahasiswa -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">History Pengisian Data Mahasiswa</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NPM</th>
                                <th>Semester</th>
                                <th>Angkatan</th>
                                <th>Bayar</th>
                                <th>Kewajiban Total</th>
                                <th>Kewajiban Semester</th>
                                <th>Sisa</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data history akan ditampilkan di sini -->
                            @foreach($mahasiswaData as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_mahasiswa }}</td>
                                <td>{{ $item->npm }}</td>
                                <td>{{ $item->semester }}</td>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ number_format($item->bayar, 2) }}</td>
                                <td>{{ number_format($item->kewajiban_total, 2) }}</td>
                                <td>{{ number_format($item->kewajiban_semester, 2) }}</td>
                                <td>{{ number_format($item->sisa, 2) }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection