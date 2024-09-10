<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CampusFunds | Database Mahasiswa</title>

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
              <a href="{{ route('home.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
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
                <div class="form-group">
                  <label for="npm">NPM</label>
                  <input type="text" id="npm" name="npm" class="form-control" required>
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
                  <label for="bayar">Bayar</label>
                  <input type="number" step="0.01" id="bayar" name="bayar" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="kewajiban_total">Kewajiban Total</label>
                  <input type="number" step="0.01" id="kewajiban_total" name="kewajiban_total" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="kewajiban_semester">Kewajiban Semester</label>
                  <input type="number" step="0.01" id="kewajiban_semester" name="kewajiban_semester" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="sisa">Sisa</label>
                  <input type="number" step="0.01" id="sisa" name="sisa" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea id="keterangan" name="keterangan" class="form-control" rows="3" required></textarea>
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
                      <!-- Contoh tombol aksi, sesuaikan dengan kebutuhan -->
                      <a href="{{ route('edit-mahasiswa', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                      <form action="{{ route('hapus-mahasiswa', $item->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      </form>
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
