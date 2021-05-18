<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Mahasiswa</title>

    <style>
        .tombol {
            background: linear-gradient(rgb(0,0,0), rgb(50,0,0));
        }
    </style>

</head>
<body class="bg-dark text-white">

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="py-4 d-flex justify-content-end align-items-center">
      <h2 class="me-auto">Tabel Mahasiswa</h2>
        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    @if(session()->has('pesan'))
        <div class="alert alert-success">
            {{ session()->get('pesan') }}
        </div>
    @endif

    <table class="table table-striped text-white">
      <thead>
        <tr>
          <th>#</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($mahasiswas as $mahasiswa)
        <tr class="text-white">
          <th>{{$loop->iteration}}</th>
          <td><a href="{{route('mahasiswas.show',['mahasiswa' => $mahasiswa->id])}}">{{$mahasiswa->nim}}</a></td>
          {{-- <td><a href="{{url ('/mahasiswas/'.$mahasiswa->id) }}">{{$mahasiswa->nim}}</a></td> --}}
          {{-- <td>{{$mahasiswa->nim}}</td> --}}
          <td>{{$mahasiswa->nama}}</td>
          <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
          <td>{{$mahasiswa->jurusan}}</td>
          <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
        </tr>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>
    </div>
  </div>
    <div class="">
    <div class="tombol p-4 btn-group-vertical">
    <button type="button" class="btn btn-primary">ABCD</button>
    <button type="button" class="btn btn-primary">EFGHIJ</button>
    <button type="button" class="btn btn-primary">KLMNOPQR</button>
    </div>
    </div>
</div>


</body>
</html>
