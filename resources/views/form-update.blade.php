<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <title>Form Registrasi</title>
</head>
<body>
<div class="container pt-4 bg-white">
<div class="row">
<div class="col-md-8 col-xl-6">
    <h1>Update Student Data</h1>
    <hr>

@foreach($mahasiswas as $mahasiswa)
<form action="/update" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $mahasiswa->id }}"> <br/>
    <div class="">
        Student ID<input type="text" class="form-control @error('nim') is-invalid @enderror" placeholder="Student's ID" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
        @error('nim')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="">
        Name<input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Student Name" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
        @error('nama')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="">
        Birth Date<input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="YYYY-MM-DD" id="tanggal_lahir" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
        @error('tanggal_lahir')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="">
        Major
        <select class="form-control mb-2 @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
            <option value="Computer Science" {{ old('jurusan')=='Computer Science' ? 'selected' : '' }}>Computer Science</option>
            <option value="Design and Art" {{ old('jurusan')=='Design and Art' ? 'selected' : '' }}>Design and Art</option>
            <option value="English Literature" {{ old('jurusan')=='English Literature' ? 'selected' : '' }}>English Literature</option>
            <option value="International Relations" {{ old('jurusan')=='International Relations' ? 'selected' : '' }}>International Relations</option>
            <option value="Ilahiyat" {{ old('jurusan')=='Ilahiyat' ? 'selected' : '' }}>Ilahiyat</option>
            <option value="Nursing" {{ old('jurusan')=='Nursing' ? 'selected' : '' }}>Nursing</option>
            <option value="Biomedical Engineering" {{ old('jurusan')=='Biomedical Engineering' ? 'selected' : '' }}>Biomedical Engineering</option>
            <option value="Philosophy" {{ old('jurusan')=='Philosophy' ? 'selected' : '' }}>Philosophy</option>
        </select>
        @error('jurusan')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="">
        GPA<input type="text" class="form-control @error('ipk') is-invalid @enderror" placeholder="Student's GPA" id="ipk" name="ipk" value="{{ $mahasiswa->ipk }}">
        @error('ipk')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3 mb-2">Update</button>
	{{-- Nama <input type="text" required="required" name="nama" value="{{ $mahasiswa->nama }}"> <br/> --}}
    {{-- Nim <input type="text" required="required" name="nim" value="{{ $mahasiswa->nim }}"> <br/> --}}
    {{-- Nama <input type="text" required="required" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"> <br/> --}}
    {{-- Nama <input type="text" required="required" name="jurusan" value="{{ $mahasiswa->jurusan }}"> <br/> --}}
    {{-- Nama <input type="text" required="required" name="ipk" value="{{ $mahasiswa->ipk }}"> <br/> --}}
	{{-- <input type="submit" value="Update"> --}}
</form>
@endforeach
</div>
</div>
</div>
</body>
</html>
