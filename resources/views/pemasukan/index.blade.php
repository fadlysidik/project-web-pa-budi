<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CampusFunds | Form Pemasukan</title>

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
      <!-- Left navbar links -->
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
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CampusFunds</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
    

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('home.index') }}" class="nav-link">Dashboard</a>
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
              <a href="{{ route('journal') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>Jurnal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('mahasiswa.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>Database Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('print-kwitansi-pemasukan') }}" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Print Kwitansi Pemasukan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kwitansi-pengeluaran.index') }}" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Print Kwitansi Pengeluaran</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

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
            <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jumlah_uang">Jumlah Uang</label>
            <input type="number" step="0.01" id="jumlah_uang" name="jumlah_uang" class="form-control" required>
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

    <!-- Main Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>&copy; 2024-2025 <a href="https://adminlte.io">CampusFunds</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>
