@extends('layouts.app')

@section('title', 'Kwitansi Pengeluaran')

@section('content')
<div class="content-wrapper">
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
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Form Kwitansi Pengeluaran -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Print Kwitansi Pengeluaran</h3>
                </div>
                <form action="{{ route('kwitansi-pengeluaran.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- Display success message -->
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Display validation errors -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Input fields -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nomor">Nomor</label>
                                <input type="number" id="nomor" name="nomor"
                                    class="form-control {{ $errors->has('nomor') ? 'is-invalid' : '' }}" required>
                                @if($errors->has('nomor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nomor') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <label for="dikeluarkan_kepada">Dikeluarkan Kepada</label>
                                <input type="text" id="dikeluarkan_kepada" name="dikeluarkan_kepada"
                                    class="form-control {{ $errors->has('dikeluarkan_kepada') ? 'is-invalid' : '' }}"
                                    required>
                                @if($errors->has('dikeluarkan_kepada'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dikeluarkan_kepada') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="angkatan_semester">Angkatan/Semester</label>
                                <input type="text" id="angkatan_semester" name="angkatan_semester"
                                    class="form-control {{ $errors->has('angkatan_semester') ? 'is-invalid' : '' }}"
                                    required>
                                @if($errors->has('angkatan_semester'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('angkatan_semester') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" id="jurusan" name="jurusan"
                                    class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}" required>
                                @if($errors->has('jurusan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jurusan') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jumlah_uang">Jumlah Uang</label>
                                <input type="number" step="0.01" id="jumlah_uang" name="jumlah_uang"
                                    class="form-control {{ $errors->has('jumlah_uang') ? 'is-invalid' : '' }}" required>
                                @if($errors->has('jumlah_uang'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jumlah_uang') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <label for="untuk_pembayaran">Untuk Pembayaran</label>
                                <input type="text" id="untuk_pembayaran" name="untuk_pembayaran"
                                    class="form-control {{ $errors->has('untuk_pembayaran') ? 'is-invalid' : '' }}"
                                    required>
                                @if($errors->has('untuk_pembayaran'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('untuk_pembayaran') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="perincian">Perincian</label>
                            <textarea id="perincian" name="perincian"
                                class="form-control {{ $errors->has('perincian') ? 'is-invalid' : '' }}" rows="3"
                                required></textarea>
                            @if($errors->has('perincian'))
                            <div class="invalid-feedback">
                                {{ $errors->first('perincian') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <!-- History Kwitansi Pengeluaran -->
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
                                <th>Dikeluarkan Kepada</th>
                                <th>Angkatan/Semester</th>
                                <th>Jurusan</th>
                                <th>Jumlah Uang</th>
                                <th>Untuk Pembayaran</th>
                                <th>Perincian</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kwitansiPengeluaran as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->dikeluarkan_kepada }}</td>
                                <td>{{ $item->angkatan_semester }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->jumlah_uang }}</td>
                                <td>{{ $item->untuk_pembayaran }}</td>
                                <td>{{ $item->perincian }}</td>
                                <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection