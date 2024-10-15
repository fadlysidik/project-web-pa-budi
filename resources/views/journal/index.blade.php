@extends('layouts.app')

@section('title', 'Journal')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Jurnal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Jurnal</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <!-- Jurnal Pemasukan -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jurnal Pemasukan</h3>
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
              @foreach ($pembayaran as $index => $item)
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

      <!-- Jurnal Pengeluaran -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jurnal Pengeluaran</h3>
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
</div>
@endsection