<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="https://kit.fontawesome.com/87c10079f1.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Courgette&family=Farro:wght@300&family=Indie+Flower&family=Kalam:wght@300&family=Pangolin&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/animate.min.css">
  <link rel="icon" type="image/png" href="/img/K.png">

  <title>@yield('title')</title>
    <style>
        .animated.zoomIn {
            animation-duration: .7s;
            animation-delay: 1.2s;
        }

      .sidebar {
        position: fixed;
        height: 100%;
        width: 250px;
        top: 0;
        left: 0;
        z-index: 1;
        background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
        overflow: hidden;
        box-shadow: 1px 0px 15px 3px #8b8b8b;
      }

      .sidebar .image {
          width: 70%;
          display: block;
          margin-left: auto;
          margin-right: auto;
          transition: 0.3s ease;
      }

      .sidebar .logo {
          position: relative;
          top: 10%;
          margin-bottom: -50%;
      }

      .sidebar .logo .image:hover {
        transform: scale(1.1);
      }

      .sidebar a {
        padding: 3vh;
        text-decoration: none;
        font-size: 4vh;
        color: #ffffff;
        display: block;
        text-align: center;
        transition: 0.4s ease;
        position: relative;
        top: 35%;
      }

      .sidebar .fa-house-damage {
          font-size: 6.3vh;
          margin-right: -7%;
          text-align: center;
          position: relative;
          left: -10%;
      }

      .sidebar .fa-discourse {
        font-size: 6.3vh;
          margin-right: 6%;
          text-align: center;
          position: relative;
          left: 1%;
      }

      .sidebar .fa-sticky-note {
        font-size: 6.3vh;
          margin-right: 5%;
          text-align: center;
          position: relative;
          left: 0%;
      }

      .sidebar .fa-sign-out-alt {
        font-size: 6.3vh;
          margin-right: 3%;
          text-align: center;
          position: fixed;
          left: 0%;
          bottom: 0%;
      }

      .sidebar .home:hover:not(.active) {
        background-color: rgb(0, 140, 255);
        color: white;
      }

      .sidebar .courses:hover:not(.active) {
        background-color: rgb(0, 140, 255);
        color: white;
      }

      .sidebar .quizzes:hover:not(.active) {
        background-color: rgb(0, 140, 255);
        color: white;
      }

      .sidebar p {
        position: relative;
        text-align: center;
        margin-top: 95%;
        margin-bottom: 20%;
        font-size: 2vh;
        bottom: 0;
        display: block;
        color: white;
        z-index: 2;
        overflow: hidden;
      }

      .sidebar p .github {
          font-size: 115%;
          color: white;
          transition: 0s;
          margin-top: -5%;
          z-index: 0;
      }

      .sidebar p .github .fa-github {
          font-size: 125%;
          margin-left: 2%;
      }

      .sidebar p .github:hover {
        color: rgb(233, 233, 233);
        text-decoration: underline;
      }

      .bottombar img {
          width: 70%;
          position: fixed;
          display: inline;
          transition: 0.3s ease;
          text-align: center;
          align-items: center;
      }

      .bottombar a {
        padding: 3vh;
        text-decoration: none;
        font-size: 4vh;
        color: #d4d4d4;
        display: inline;
        transition: 0.4s ease;
        position: relative;
        top: 20%;
        text-align: center;
        align-items: center;
        margin-left: 9%;
      }

      .transition-fade {
          opacity: 1;
          transition: 500ms;
      }

      html.is-animating .transition-fade {
          opacity: 0;
      }

      .row .sidebar .extra {
        position: absolute;
        text-align: center;
        left: 18%;
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
          padding-left: 3px;
          padding-right: 3px;
          transition: 0s;
      }

      .row .sidebar .extra a:hover {
        color: rgb(233, 233, 233);
        text-decoration: underline;
      }

      @media only screen and (min-width: 1850px) {
        .sidebar .logo {
          position: relative;
          top: 7%;
          margin-bottom: -50%;
        }

        .sidebar a {
          padding: 3vh;
          text-decoration: none;
          font-size: 4vh;
          color: #ffffff;
          display: block;
          text-align: center;
          transition: 0.4s ease;
          position: relative;
          top: 30%;
        }

        .sidebar p {
            position: relative;
            text-align: center;
            margin-top: 90%;
            font-size: 2vh;
            bottom: 0;
            display: block;
            color: white;
        }
      }

      @media only screen and (max-width: 1100px) {
        .bg {
            display: none;
        }

        .sidebar {
            display: none;
            position: fixed;
            height: 100%;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1;
            background: linear-gradient(rgb(58, 166, 255),rgb(78, 175, 255));
            overflow: auto;
            box-shadow: 1px 0px 15px 3px #8b8b8b;
      }

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

    }
  </style>

</head>
<body>
    <div class="container p-4 animated fadeIn">
        <div class="row">
            <div class="col-2">
                <div>
                    <div class="sidebar">
                        <a class="logo animated zoomIn" href="{{ route('courses.index') }}"><img class="image" src="/img/K.png" alt="Kidspiration-Logo"></a>
                        <a class="home" href="{{ route('courses.index') }}"><i class="fas fa-house-damage"></i> Home</a>
                        <a class="courses" href="{{ route('courses.course') }}"><i class="fab fa-discourse"></i> Courses</a>
                        <a class="quizzes" href="{{ route('courses.quiz') }}"><i class="fas fa-sticky-note"></i> Quizzes</a>
                        <p>Wanna improve our website? <a class="github" href="https://github.com/Kidspiration/Kidspiration-Website" target="_blank">Visit our <i class="fab fa-github"></i> GitHub</a></p>
                        <p class="extra"><a class="about" href="/about">About Us</a>|<a class="copyright" href="#">Copyright</a>|<a class="support" href="#">Support</a></p>
                        {{-- <div>
                            <a class="logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div> --}}
                    </div>

                    <div class="bottombar">
                        {{-- <a class="logo" href="{{ route('courses.index') }}"><img class="image" src="/img/K.png" alt="Kidspiration-Logo"></a> --}}
                        <a class="home" href="{{ route('courses.index') }}"><i class="fas fa-house-damage"></i></a>
                        <a class="courses" href="{{ route('courses.course') }}"><i class="fab fa-discourse"></i></a>
                        <a class="quizzes" href="{{ route('courses.quiz') }}"><i class="fas fa-sticky-note"></i></a>
                    </div>
                </div>
            </div>

                @section('content')
                @show

        </div>
    </div>
</body>
</html>
