@extends('layout/master')
@section('title','Kidspiration Courses')

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
            background-image: linear-gradient(rgba(255, 255, 255, 0.698),rgba(255, 255, 255, 0.678)), url(img/bg7.jpg);
            background-position: center;
            background-size: cover;
            height: 100%;
        }

      .main {
        margin-left: 100px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 0px;

      }

      .row {
        margin-right: -70px;
        position: relative;
          left: -20px;

      }

      .thumbnail {
          background: linear-gradient(to right, rgb(58, 166, 255),rgb(85, 178, 255));
          border-radius: 10px;
          width: 285px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
            margin-bottom: 50px;
            margin-top: 50px;
            transition: .2s ease;
        }

        .thumbnail:hover {
            margin-top: 30px;
        }

        .thumbnail a .caption {
            background-color: white;
            border-radius: 0 0 10px 10px;
        }

        .thumbnail a {
            text-decoration: none;
        font-style: normal;
        }

      .thumbnail a img {
          box-sizing: border-box;
          width: 65%;
          margin: 18%;
      }

      .thumbnail a .caption h3 {
        color: rgb(58, 166, 255);
        text-align: center;
        padding-top: 20px;
        margin-bottom: 0vh;
        font-weight: 1000;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        font-family: 'Kalam', cursive;
        /* font-family: 'Pangolin', cursive; */
        /* font-family: 'Titillium Web', sans-serif; */
      }

      .thumbnail a .caption span {
        color: rgb(58, 166, 255);
        font-family: 'Pangolin', cursive;
        padding: 0 13px 13px 13px;
        font-size: 2.75vh;
      }

      .thumbnail a .caption span i {
          margin-right: 1vh;
      }

      .thumbnail a .caption p {
        color: rgb(58, 166, 255);
        text-align: left;
        padding: 0 13px 13px 13px;
        font-size: 3vh;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        /* font-family: 'Kalam', cursive; */
        /* font-family: 'Pangolin', cursive; */
        font-family: 'Titillium Web', sans-serif;
      }

      .bottombar .courses {
        color: #ffffff;
      }

      .main .row .logout {
          position: fixed;
          right: 0%;
          font-size: 3vh;
          padding: 1vh 2vh 1vh 2vh ;
          text-decoration: none;
      }

      .row .sidebar .extra {
        position: absolute;
        text-align: center;
        left: 13%;
        bottom: -5%;
        font-size: 2vh;
        display: block;
        color: white;
        z-index: 2;
        overflow: hidden;
      }

      .row .sidebar .extra a {
          display: inline;
          font-size: 2vh;
          padding-left: 1vh;
          padding-right: 1vh;
          transition: 0s;
      }

      .row .sidebar .extra .support {
        padding-left: 1vh;
      }

      @media only screen and (min-width: 1850px) {
        .sidebar {
            width: 23%;
        }

        .bottombar {
            display: none;
        }

        .main .thumbnail {
          position: relative;
          left: 25%;
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

        .bottombar {
            display: none;
        }
      }

      @media only screen and (max-width: 1100px) {
          .main .row .thumbnail {
              position: relative;
              left: -28%;
              display: inline-block;
              margin-left: auto;
              margin-right: auto;
          }

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

        }

        .bottombar a {
            position: relative;
            margin-left: 7%;
            font-size: 200%;
        }
      }

    </style>

        <div class="main col">
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row animated fadeInUp">
                <div class="col-md-4 ">
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
                    <div class="thumbnail ">
                        <a href="{{ route('courses.A') }}">
                            <img src="/img/1.png" alt="Lights">
                            <div class="caption">
                                <h3>1st Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'A')->count() }} Courses</span>
                                <p>Get to know better how to say your family, days and months, and many more in English.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ route('courses.B') }}">
                            <img src="/img/2.png" alt="Lights">
                            <div class="caption">
                                <h3>2nd Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'B')->count() }} Courses</span>
                                <p>What time is it now? What is your favorite food and drink? What are your hobbies?</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ route('courses.C') }}">
                            <img src="/img/3.png" alt="Lights">
                            <div class="caption">
                                <h3>3rd Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'C')->count() }} Courses</span>
                                <p>Be friendly with English alphabet, advanced numbers, body parts and many more.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ route('courses.D') }}">
                            <img src="/img/4.png" alt="Lights">
                            <div class="caption">
                                <h3>4th Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'D')->count() }} Courses</span>
                                <p>Both animals and plants are very important for life. So, let's learn it together with us :D</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ route('courses.E') }}">
                            <img src="/img/5.png" alt="Lights">
                            <div class="caption">
                                <h3>5th Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'E')->count() }} Courses</span>
                                <p>It is time to greet someone, introduce yourself to someone, and also understand basic math.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="{{ route('courses.F') }}">
                            <img src="/img/6.png" alt="Lights">
                            <div class="caption">
                                <h3>6th Grade</h3>
                                <span><i class="fas fa-book"></i> {{ $courses->where('grade', 'F')->count() }} Courses</span>
                                <p>Have you ever lost? Understanding direction and place is a key for this situation.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
