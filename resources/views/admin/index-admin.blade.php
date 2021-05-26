@extends('layout/master')
@section('title','Kidspiration: English Education')

@section('content')
    <style>
        .animated.fadeInUp {
            animation-duration: .7s;
            animation-delay: 1s;
        }

        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.698),rgba(255, 255, 255, 0.678)), url(img/bg3.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .bg {

    }

      .main {
        margin-left: 160px; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 0px;
        font-weight: 500;
        /* font-family: 'Acme', sans-serif; */
        /* font-family: 'Courgette', cursive; */
        /* font-family: 'Farro', sans-serif; */
        /* font-family: 'Indie Flower', cursive; */
        /* font-family: 'Kalam', cursive; */
        font-family: 'Pangolin', cursive;
        /* font-family: 'Titillium Web', sans-serif; */
      }

      .main .logo {
          border-radius: 100vh;
          width: 30%;
          display: block;
          position: relative;
          left: 30%;
          margin-top: 5vh;
          margin-bottom: 5vh;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
          transition: 0.7s ease;
      }

      .main .logo:hover {
          transform: rotate(360deg);
      }

      .main .content .intro {
        text-align: justify;
        font-size: 25px;
        position: relative;
        margin-left: -50px;
        color: rgb(58, 166, 255);
      }

       .fa-studiovinari {
          margin-right: 1.3vh;
          transition: 0.3s ease;
          font-size: 140%;
      }

      .main .content .start:hover .fa-studiovinari {
          display: inline;
          margin-right: 1.3vh;
          left: 32%;
      }

      .main .content .start {
        font-size: 90%;
        font-weight: 700;
        position: relative;
        left: 29%;
        margin-top: 3vh;
        margin-bottom: 20px;
        text-align: center;
        padding-left: 7%;
        padding-right: 7%;
        padding-top: 2%;
        padding-bottom: 2%;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 0vh;
        background: white;
        color: rgb(78, 175, 255);
        transition: 0.4s ease;
        font-family: 'Titillium Web', sans-serif;
      }

      .main .content .start:hover {
        background: rgb(78, 175, 255);
        color: white;
        transform: scale(1.2);
        left: 29%;
        transition: 0.4s ease;
      }

      .bottombar .home {
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
          left: 35%;
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

        .main .content {
          position: fixed;
          left: 35%;
          right: 10%;
          top: 5%;
        }

        .bottombar {
            display: none;
        }
      }



      @media only screen and (max-width: 1100px) {
            .main .logo {
              border-radius: 100vh;
              width: 30%;
              display: block;
              position: relative;
              left: 30%;
              margin-top: 5vh;
              margin-bottom: 5vh;
              box-shadow: 0 4px 8px 0 rgba(39, 39, 39, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
              transition: 0.7s ease;
            }

          .main .content {
              position: fixed;
              top: 11%;
              left: 21%;
              right: 10%;
              display:inline-block;
              margin-left: auto;
              margin-right: auto;
          }

          .main .content .start {
              position: fixed;
              left: 28%;
              top: 63%;
          }

          .main .content .intro {
              text-align: justify;
              font-size: 85%;
              position: relative;
              margin-left: -50px;
              color: rgb(58, 166, 255);
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
                @endauth
                <img class="logo " src="/img/logo_1.png" alt="KDS">
                <p class="intro ">Selamat datang di Kidspiration! Kami di sini memberikan pembelajaran mengenai materi bahasa Inggris untuk siswa dan siswi sekolah dasar yang bisa memudahkan kalian dalam belajar bahasa Inggris dengan lebih mudah.</p>
                <a name="" id="" class="start create btn btn-primary" href="{{ route('courses.course') }}" role="button"><i class="fab fa-studiovinari"></i>Let's Go</a>
            </div>
        </div>
@endsection
