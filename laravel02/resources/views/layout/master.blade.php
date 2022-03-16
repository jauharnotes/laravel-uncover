<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('title', 'Sistem informasi mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{route('mahasiswa')}}" class="nav-link @yield('menuMahasiswa')">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a href="{{route('dosen')}}" class="nav-link @yield('menuDosen')">Data Dosen</a>
            </li>
            <li class="nav-item">
              <a href="{{route('gambar')}}" class="nav-link @yield('menuGalery')">Galery</a>
            </li>
            <li class="nav-item">
              <a href="{{route('info', ['fakultas' => 'FMIPA', 'jurusan' => 'Matematika'])}}" class="nav-link @yield('menuInfo')">Info</a>
            </li>
          </ul>
        </div>
      </nav>
      @section('content')
      <div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
      @show
      <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
          Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Universitas Jauharuddin
        </div>
      </footer>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>