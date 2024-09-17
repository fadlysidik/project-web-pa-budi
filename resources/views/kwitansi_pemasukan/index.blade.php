<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CampusFunds | Print Kwitansi Pemasukan</title>

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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
              <p>
                Form Pemasukan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('form-pengeluaran')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Form Pengeluaran
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('journal')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Jurnal
                <i class="right fas fa-angle-left"></i>
              </p>
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
            <h1>Form Print Kwitansi Pemasukan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Print Kwitansi Pemasukan</li>
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
          <form action="{{ route('proses-pemasukan') }}" method="post">
    @csrf
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nomor">Nomor</label>
                <input type="text" id="nomor" name="nomor" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="diterima_dari">Diterima Dari</label>
                <input type="text" id="diterima_dari" name="diterima_dari" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="angkatan_semester">Angkatan/Semester</label>
                <input type="text" id="angkatan_semester" name="angkatan_semester" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="jurusan">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="jumlah_uang">Jumlah Uang</label>
                <input type="number" step="0.01" id="jumlah_uang" name="jumlah_uang" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="untuk_pembayaran">Untuk Pembayaran</label>
                <input type="text" id="untuk_pembayaran" name="untuk_pembayaran" class="form-control" required>
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
            <h3 class="card-title">History Kwitansi Pemasukan</h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor</th>
                  <th>Diterima Dari</th>
                  <th>Angkatan/Semester</th>
                  <th>Jurusan</th>
                  <th>Jumlah Uang</th>
                  <th>Untuk Pembayaran</th>
                  <th>Perincian</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kwitansi as $index => $item)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->diterima_dari }}</td>
                    <td>{{ $item->angkatan_semester }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->jumlah_uang }}</td>
                    <td>{{ $item->untuk_pembayaran }}</td>
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