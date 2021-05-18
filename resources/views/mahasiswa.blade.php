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
    <script>
        $(document).ready(function()
        {
            $("#search").click(function()
            {
                var nama = $("#term").val();
                document.location = "/search/" + nama;
            })
        });
    </script>
    <title>Data Mahasiswa</title>
</head>
<body>
<div class="container text-center p-4">
    <h1>Student Data</h1>
@isset($alert)
    @if ($alert == "primary")
    <div class="alert alert-primary" role="alert">
        Data has been added successfully
    </div>
    @elseif ($alert == "warning")
    <div class="alert alert-warning" role="alert">
        Data has been deleted successfully
    </div>
    @endif
@endisset

    <nav class="navbar navbar-light bg-light">
        <a href="#"></a>
        <div class="">
            <input style="padding-right: 150px;" class="d-flex form-control me-2" type="text" placeholder="Your name" aria-label="Search" name="term" id="term">
            <button style="float: right" class="btn btn-primary" type="submit" id="search">Search</button>
        </div>
    </nav>
    <div class="row">
        <div class="col-2">
            <div>
                <div class="btn-group-vertical pt-2" role="group" aria-label="Vertical button group">
                    <a style="padding: 6px 55px" type="button" class="btn btn-primary" href="/">Home</a>
                    <a type="button" class="btn btn-primary" href="/form">Insert Data</a>
                    <a type="button" class="btn btn-primary" href="/delete">Delete Data</a>
                    <a type="button" class="btn btn-primary" href="/sortBy-nama">SortBy Name</a>
                    <a type="button" class="btn btn-primary" href="/sortBy-ipk">SortBy IPK</a>
                </div>
            </div>
        </div>
        <div class="col">
            <table class="table">
                <thead style="text-align: left" class="thead-light">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAME</th>
                    <th scope="col">STUDENT ID</th>
                    <th scope="col">BIRTH DATE</th>
                    <th scope="col">MAJOR</th>
                    <th scope="col">GPA</th>
                  </tr>
                </thead>

                <tbody style="text-align: left">
                @forelse ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->nim}}</td>
                        <td>{{$mahasiswa->tanggal_lahir}}</td>
                        <td>{{$mahasiswa->jurusan}}</td>
                        <td>{{$mahasiswa->ipk}}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a class="btn btn-primary btn-sm me-md-2" type="button" href="/edit/{{$mahasiswa->id}}">Edit</a>
                                <a class="btn btn-primary btn-sm" type="button" href="/destroy/{{$mahasiswa->id}}">Delete</a>
                            </div>
                        </td>
                @empty
                    <div class="alert alert-dark d-inline-block">
                        There is no data
                    </div>
                @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
