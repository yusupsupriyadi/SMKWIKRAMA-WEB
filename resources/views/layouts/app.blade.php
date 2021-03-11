<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <title>Laravel Livewire</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <livewire:styles />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <livewire:scripts />
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        @yield('back')
      </li>
    </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span class="">Selamat Datang <strong>{{ auth()->user()->name }} </strong></span>
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('auth.register') }}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Tambah admin
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <livewire:backend.logout/>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WIKRAMA WEB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('backend.dashboard.index') }}" class="nav-link active">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboar
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-trophy"></i>
              <p>
                Data Prestasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('penghargaan.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penghargaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('prestasi-tahunan.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prestasi tahunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('prestasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-chart-pie"></i>
              <p>
                Discover Wikrama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('schoolalliance.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>School Alliance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ptkerjasama.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PT Kerjasama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('lembagakerjasama.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lembaga Kerjasama</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-comments"></i>
              <p>
                Testimoni
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('testimonialumni.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimoniperusahaan.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni Perusahaan</p>
                </a>
              </li>
            </ul>
            <li class="nav-header">MORE</li>
          <li class="nav-item">
            <a href="{{ route('berita.index') }}" class="nav-link">
              <i class="far fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('galery.index') }}" class="nav-link">
              <i class="fas fa-images"></i>
              <p>
                Galery
              </p>
            </a>
          </li>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('title')
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    @yield('content')

  <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="pt-10">

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.js" integrity="sha512-gaB3VkYNBXGPjf1TuyPJahwm3KTl2q1PuF7b7k/ncNh8/QodlcPtya+YbjmxDo+bAy6dZTWW5ZW6tS1NQLxqXw==" crossorigin="anonymous"></script>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')  }}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

</body>
</html>