@extends('layout/master')
@section('title', 'Kidspiration Courses 2nd Grade')

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
          position: relative;
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
        padding-right: 10vh;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;
        background: white;
        color: rgb(78, 175, 255);
        font-size: 4vh;
        width: 120vh;
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
          right: 0%;
          font-size: 3vh;
          padding: 1vh 2vh 1vh 2vh ;
          text-decoration: none;
      }

      .right-icon {
          position: fixed;
          bottom: 10%;
          z-index: 10;
      }

      .right-icon .fas {
          padding: 20%;
          padding-top: 25%;
      }

      .right-icon .fa-users {
        padding: 20%;
          padding-left: 18%;
          padding-top: 25%;
      }

      .right-icon .about, .support {
          position: fixed;
          right: 3%;
          font-size: 5vh;
          transition: .3s ease;
          border: 1px solid rgb(78, 175, 255);
      }

      .right-icon .about:hover {
        background: rgb(255, 255, 255);
        color: rgb(78, 175, 255);
      }

      .right-icon .about {
        width: 10vh;
       height: 10vh;
       color: white;
       background: rgb(78, 175, 255);
       border-radius: 50vh;
       bottom: 17%;
      }

      .right-icon .support:hover {
        background: rgb(255, 255, 255);
        color: rgb(78, 175, 255);
      }

      .right-icon .support {
       width: 10vh;
       height: 10vh;
       color: white;
       background: rgb(78, 175, 255);
       border-radius: 50vh;
       bottom: 5%;
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
          left: 0%;
          right: 10%;
          top: 7%;
          margin-bottom: 20vh;
        }

        .main .content .quiz {
            max-width: 105vh;
            padding-right: 10vh;
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
          position: relative;
          left: 7%;
          right: 7%;
          top: 3%;
          margin-bottom: 14%;
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
         <div class="right-icon">
            <a href="/about" class="about"><i class="fas fa-users"></i></a>
            <a href="/support" class="support"><i class="fas fa-comments"></i></a>
        </div>
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
