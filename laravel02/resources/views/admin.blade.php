<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Admin Dashboard</title>
</head>
<body>
   <div class="container text-center mt-3 p-4 bg-white">
       <h1 class="mb-3">Halaman Admin</h1>
       <div class="row">
           <div class="col-12">
              @component('layout.alert', ['class'=> 'danger', 'judul' => 'Peringatan'])
              100 data mahasiswa perlu di perbaiki
              @endcomponent

              @component('layout.alert', ['class' => 'warning', 'judul' => 'Awas'])
              Hari ini deadline laporan perjalanan dinas!
              @endcomponent 

              {{-- @component('layout.alert')
              @slot('class')
              success
              @endslot
              Bulan depan cuti panjang
              @endcomponent  --}}
            </div>
        </div>
    </div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>