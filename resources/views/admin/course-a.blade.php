@extends('layout/master')
@section('title', 'Kidspiration Courses 1st Grade')

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
            background-image: linear-gradient(rgba(255, 255, 255, 0.698),rgba(255, 255, 255, 0.678)), url(/img/bg7.jpg);
            background-position: center;
            background-size: cover;
            height: 100%;
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
          max-width: 100vh;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        /* font-family: 'Kalam', cursive; */
        font-family: 'Pangolin', cursive;
        /* font-family: 'Titillium Web', sans-serif; */
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
        background: white;
        color: rgb(78, 175, 255);
        font-size: 4vh;
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

      .main .content .add {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
            margin-bottom: 3vh;
      }

      .main .content .add:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .bottombar .quizzes {
        color: #ffffff;
      }

      .main .content .logout {
          position: fixed;
          right: 5%;
      }

      @media only screen and (min-width: 1850px) {
        .sidebar {
            width: 23%;
        }

        .bottombar {
            display: none;
        }

        .main .content {
          position: fixed;
          left: 32%;
          right: 10%;
          top: 12%;
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

        .main .content {
          position: fixed;
          left: 35%;
          right: 10%;
          top: 12%;
        }

        .bottombar {
            display: none;
        }
      }

      @media only screen and (max-width: 1100px) {
        .bottombar {
            display: inline;
            position: fixed;
            height: 11%;
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
            margin-left: 9%;
        }

        .main .content .add {
            position: relative;
            display: inline-block;
            margin-left: 0%;
        }

        .main .content table {
            position: relative;
            display: inline-block;
            margin-right: 0%;
            margin-left: -47%;
        }

        .main .content table .quiz {
            display: block;
            margin-bottom: 7%;
            margin-right: -40%;
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
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <a name="" id="" class="add create btn btn-primary" href="{{ route('courses.create') }}" role="button">Create Course</a>
                @endauth
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                        {{ session()->get('message') }}
                        </div>
                    @endif
                <table>
                    <thead></thead>
                    <tbody>
                        @forelse ($courses as $course)
                        <tr>
                            <td>
                                <a name="" id="" class="quiz btn btn-primary"
                                href="{{route('courses.show', ['course' => $course->id])}}"
                                role="button">{{ $course->name }}</a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
@endsection