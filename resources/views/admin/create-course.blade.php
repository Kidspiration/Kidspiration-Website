@extends('layout/master')
@section('title','Kidspiration Courses Creation')

@section('content')
    <style>
        .animated.fadeIn {
            animation-duration: .0s;
            animation-delay: .0s;
        }

        .animated.zoomIn {
            animation-duration: .0s;
            animation-delay: .0s;
        }

        .animated.fadeInUp {
            animation-duration: .9s;
            animation-delay: .7s;
        }

        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.527),rgba(255, 255, 255, 0.534)), url(img/bg4.jpg);
            background-position: center;
        }

      .main {
        position: relative;
        margin-left: 0vh; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 0px;
        top: 3vh;
        left: 7vh;
        right: 10vh;
        box-sizing: border-box;
      }

      .main .content {
          max-width: 100%;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        /* font-family: 'Kalam', cursive; */
        /* font-family: 'Pangolin', cursive; */
        font-family: 'Titillium Web', sans-serif;
      }

      .main .content a {
        display: block;
        margin-bottom: 20px;
        text-align: justify;
        padding-left: 40px;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content a:hover {
        background: rgb(78, 175, 255);
        color: white;
      }

       .content form .form-group .option {
          margin-left: 3vh;
      }

      .content form .form-group .answer {
          margin-left: 3vh;
          width: 50%;
      }

      .content form .form-group .course {
          width: 35%;
      }

       form .form-group .form-control {
          margin-bottom: 1vh;
      }

      .main .content form .form-group .number {
          margin-top: 5vh;
          width: 205%;
      }

      .bottombar .quizzes {
        color: #ffffff;
      }

      .main .content .logout {
          position: fixed;
          right: 0%;
          font-size: 3vh;
          padding: 1vh 2vh 1vh 2vh ;
          text-decoration: none;
      }

      .main .content #name {
          width: 105vh;
      }

      .input-group label {
          padding: 7% 100% 7% 10%;
          margin-right: 7vh;
          font-size: 3vh;
      }

      .input-group select {
          font-size: 3vh;
          text-align: center;
          padding-left: 3vh;
          padding-right: 2vh;
      }

      .form-group .name {
          font-size: 4vh;
      }

      .main .content .insert {
          margin-top: 3vh;
          margin-bottom: 3vh;
          font-size: 4vh;
      }

      .main .content .btn {
          margin-top: 3vh;
          background: rgb(78, 175, 255);
          color: white;
          border: 1px solid rgb(78, 175, 255);
      }

      .main .content .btn:hover {
          background: white;
          color: rgb(78, 175, 255);
      }

      @media only screen and (min-width: 1850px) {
        .sidebar {
            width: 23%;
        }

        .bottombar {
            display: none;
        }

        .main .content {
          position: relative;
          left: 5%;
          right: 10%;
          top: 5%;
        }
      }

      @media only screen and (max-width: 1849px) {
        .sidebar {
            width: 20%;
        }

        .sidebar a {
            position: relative;
            top: 35%;
            font-size: 4vh;
        }

        .sidebar .logo {
            top: 7%;
        }

        .sidebar .image {
            width: 60%;
        }

        .sidebar .fas {
            font-size: 5vh;
        }

        .sidebar .fab {
            font-size: 5vh;
        }

        .bottombar {
            display: none;
        }
      }

      @media only screen and (max-width: 1100px) {
        .bottombar {
            display: inline;
            position: fixed;
            height: 5%;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
            background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
            overflow: auto;
        }

        .bottombar a {
            font-size: 200%;
            position: relative;
            margin-left: 4%;
        }

        .main .content {
            margin-left: -35%;
        }

        .main .content .add {
            position: relative;
            display: inline-block;
            margin-left: 10%;
        }

        .main .content table {
            position: relative;
            display: inline-block;
            margin-right: 15%;
            margin-left: -23%;
        }

        .main .content table .quiz {
            display: block;
            margin-bottom: 7%;
            margin-right: -35%;
            padding-left: 15%;
            padding-right: 10%;
            padding-top: 10%;
            padding-bottom: 10%;
        }

      }
    </style>

        <div class="main col">
            <div class="content animated fadeInUp">
                @auth
                <div>
                    <a class="logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endauth
                <div class="col-md-8 ">
                    <h1>Create Course</h1>
                    <hr>

                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="grade">Grade</label>
                            </div>
                            <select class="custom-select @error('grade') is-invalid @enderror" id="grade" name="grade">
                              <option selected>Choose...</option>
                              <option id="grade" name="grade" value="A">A</option>
                              <option id="grade" name="grade" value="B">B</option>
                              <option id="grade" name="grade" value="C">C</option>
                              <option id="grade" name="grade" value="D">D</option>
                              <option id="grade" name="grade" value="E">E</option>
                              <option id="grade" name="grade" value="F">F</option>
                            </select>
                            @error('grade')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="form-group">
                        <input type="text"
                        class="name form-control @error('name') is-invalid @enderror"
                        id="name" name="name" value="{{ old('name') }}" placeholder="Name your course">
                        @error('name')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="course form-control @error('course') is-invalid @enderror"
                        id="course" name="course" value="{{ old('course') }}" placeholder="For example A1, B2, etc">
                        @error('course')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="writer form-control @error('writer') is-invalid @enderror"
                        id="writer" name="writer" value="{{ old('writer') }}" placeholder="Written by">
                        @error('writer')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="insert form-group">
                        <label for="berkas">Insert Image </label>
                        <input type="file" class="form-control-file" id="image_1" name="image_1" value="{{ old('image_1') }}">
                        @error('image_1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <textarea id="summernote" name="material_1"></textarea>

                    <script>
                        $('#summernote').summernote({
                          placeholder: 'Input the materials here',
                          tabsize: 2,
                          height: 100,
                          width: 750,
                          toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link','picture']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                          ]
                        });
                      </script>

                        <button type="submit" class="btn btn-primary mb-2">Create</button>
                        <button type="reset" class="btn btn-primary mb-2">Reset</button>
                    </form>
            </div>
        </div>
@endsection
