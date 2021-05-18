@extends('layout/master')
@section('title','Course: '.$course->name)

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
            animation-duration: .7s;
            animation-delay: .8s;
        }

        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.527),rgba(255, 255, 255, 0.534)), url(/img/bg4.jpg);
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
          max-width: 155vh;
          margin-bottom: 5%;
          margin-top: 3%;
      }

      .main .content h1 {
          text-align: center;
          margin-bottom: 5%;
      }

      .main .content .quiz {
        display: block;
        margin-bottom: 20px;
        margin-right: 3vh;
        text-align: left;
        padding-left: 40px;
        padding-right: 40vh;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;

        color: rgb(78, 175, 255);
      }

      .main .content .quiz:hover {
        background: rgb(78, 175, 255);
        color: white;
      }

      .main .content .edit {
          margin-right: 3vh;
          padding-left: 3vh;
          padding-right: 3vh;
          padding-top: 1vh;
          padding-bottom: 1vh;
          border: 1px solid rgb(78, 175, 255);
          background: rgb(78, 175, 255);
          color: white;
      }

      .main .content .edit:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .delete {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
      }

      .main .content .delete:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .btn {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
            margin-top: 3vh;
            margin-bottom: 3vh;
      }

      .main .content .btn:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .bottombar .quizzes {
        color: #ffffff;
      }

      .main .content h1 {
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        font-family: 'Kalam', cursive;
        font-weight: 1000;
        font-size: 7vh;
        /* font-family: 'Pangolin', cursive; */
        /* font-family: 'Titillium Web', sans-serif; */
      }

      .main .content .image1 {
          display: block;
          text-align: center;
          align-items: center;
          width: 50%;
          margin-left: auto;
          margin-right: auto;

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
            height: 9%;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 3;
            background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
            overflow: auto;
        }

        .bottombar a {
            position: relative;
            margin-left: 8%;
        }

        .main .content form {
            margin-left: -25%;
            margin-right: 40%;
        }

        .main .content form .btn {
            position: relative;
            margin-top: 3vh;
            margin-bottom: 7vh;
            display: inline-block;
            bottom: 35%;
        }
      }
    </style>

        <div class="main col">
            <div class="content animated fadeInUp">
                <div class="">
                    @auth
                        <a href="{{ route('courses.edit',['course' => $course->id]) }}"
                        class="btn btn-primary m-2">Edit</a>
                        <form action="{{ route('courses.destroy',
                        ['course' => $course->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endauth
                    <h1>{{ $course->name }}</h1>

                    @if ($course->image_1 != NULL)
                        <img class="image1" src={{asset('storage/' . $course->image_1)}} alt="Image_1">
                    @endif

                    <p class="material">{!! $course->material_1 !!}</p>

                </div>
            </div>
        </div>
@endsection
