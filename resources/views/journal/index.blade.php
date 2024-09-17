<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CampusFunds | Jurnal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('home.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('home.index') }}" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CampusFunds</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('form-pemasukan') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Form Pemasukan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('form-pengeluaran') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Form Pengeluaran</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('journal') }}" class="nav-link active">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Jurnal</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('mahasiswa.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Database Mahasiswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('print-kwitansi-pemasukan')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Print Kwitansi Pemasukan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kwitansi-pengeluaran.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Print Kwitansi Pengeluaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          </ul>
        </nav>
      </div>
    </aside>

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

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>&copy; 2024-2025 <a href="https://adminlte.io">CampusFunds</a>.</strong> All rights reserved.
    </footer>
  </div>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
