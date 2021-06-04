<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="icon" type="image/png" href="/img/K.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87c10079f1.js" crossorigin="anonymous"></script>
    <title>Welcome to Kidspiration</title>
    <link rel="icon" type="image/png" href="/img/K.png">
</head>
<style>
    .animated.pulse {
        animation-duration: .5s;
        animation-delay: .5s;
    }

    .animated.fadeInRight {
        animation-duration: .7s;
        animation-delay: 1s;
    }

    .animated.fadeInLeft {
        animation-duration: .7s;
        animation-delay: 1.5s;
    }

    .animated.fadeInUp {
        animation-duration: .7s;
        animation-delay: 2s;
    }

    body {

    }

    .bg {
        background: linear-gradient(rgba(35, 204, 255, 0.644),rgba(62, 184, 255, 0.5)), url('/img/bg.jpg');
        position: fixed;
        height: 100%;
        width: 755px;
        background-size: cover;
        background-position: center;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .main {
        position: fixed;
        z-index: 2;
        font-family: 'Fira Sans', sans-serif;
    }

    .main .logo {
          border-radius: 100vh;
          width: 10%;
          display: inline-block;
          position: fixed;
          top: 10%;
          left: 77%;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
          transition: 0.7s ease;
      }

      .main .logo:hover {
          transform: scale(0.8);
      }

    .content form input {
        border-top-color: white;
        border-left-color: white;
        border-right-color: white;
        margin-bottom: 15px;
        padding-top: 25px;

    }

    .content form input::placeholder{
        color: rgb(160, 160, 160);
        transition: .3s ease;
    }

    .content form input:focus::placeholder {
        position: relative;
        top: -23px;
        font-size: 11px;
        transition: .3s ease;
        color: rgb(92, 193, 239);
    }

    .content form .btn {
        border-radius: 70px;
        width: 100px;
        border: 1px solid rgb(92, 193, 239);
    }

    .content {
        align-items: center;
        position: fixed;
        right: 70px;
        top: 38%;
        bottom: 25%;
        z-index: 2;
    }

    .content a {

        border-radius: 40px;;
        color: rgb(60, 135, 255);
        display: block;
        padding: 10px;
        padding-left: 20%;
        padding-right: 20%;
        text-align: center;
        text-decoration: none;
        margin-bottom: 5px;
        margin: 10% 10% -5% 0;
        font-size: 18px;
        font-weight: 750;
    }

    .content .satu, .dua, .tiga {
        font-size: 30px;
        margin-bottom: -15px;
        font-weight: 500;
    }

    .content .empat {
        margin-top: 65px;
        margin-bottom: -3px;
    }

    .main .content form .btn {
            margin-top: 5%;
            width: 100%;
            padding-top: 4%;
            padding-bottom: 4%;
            font-weight: 1000;
            font-size: 3vh;
            background: rgb(92, 193, 239);
            color: white;
            transition: .2s ease;
    }

    .main .content form .btn:hover {
        background: rgb(88, 182, 226);
    }



    .main .content form .btn:focus {

    }

    .cp {
        position: absolute;
        bottom: -70%;
        left: 10%;
    }

    .cp li {
        list-style: none;
    }

    @media only screen and (min-width: 1850px) {
        .bg {
            width: 63%;
            height: 100vh;
        }

        .bg .bg-logo {
            position: fixed;
            top: 45%;

            transition: 0.3s ease;
            width: 45%;
        }

        .content {
            align-items: center;
            position: fixed;
            right: 110px;
            top: 38%;
            bottom: 25%;
            z-index: 2;
        }

        .main .content form .btn {
            margin-top: 5%;
            width: 100%;
            padding-top: 4%;
            padding-bottom: 4%;
            font-weight: 1000;
            font-size: 3vh;
            background: rgb(92, 193, 239);
            color: white;
            transition: .2s ease;
        }

        .cp {
            position: absolute;
            bottom: -70%;
            left: 25%;
        }
    }

    @media only screen and (min-width: 1101px)
    {
        .bg {
            width: 63%;
            height: 100vh;
        }

        .bg .bg-logo {
            position: fixed;
            top: 15%;
            left: 8%;
            transition: 0.3s ease;
            width: 45%;
        }

        .main .content {
            display: inline-block;
            margin: auto;
            position: fixed;
            top: 40%;
            left: 69%;
            align-items: center;
            padding: auto;
            box-sizing: border-box;
        }

        .main .content form .btn {
            margin-top: 5%;
            width: 100%;
            padding-top: 4%;
            padding-bottom: 4%;
            font-weight: 500;
            background: rgb(92, 193, 239);
            color: white;
            transition: .2s ease;
        }
    }

    @media only screen and (max-width: 1100px) {
        .bg {
            display: none;
        }

        .main .logo {
          width: 25%;
          display: inline-block;
          position: fixed;
          top: 15%;
          left: 40%;
      }

        .main .content {
            position: fixed;
            align-items: center;
            display: inline-block;
            left: 20%;
            margin-left: auto;
            margin-right: auto;
            padding: auto;
            box-sizing: border-box;
        }
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <div class="bg">
                        <img class="bg-logo animated pulse" src="/img/logo_2.png" alt="KDS">
                    </div>
                </div>
            </div>

            <div class="main d-fluid">
                <div class="content">
                    <img class="logo" src="/img/K.png" alt="KDS">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group animated fadeInRight">
                      <input type="text"
                      class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"
                      id="email" name="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group animated fadeInLeft">
                      <input type="password"
                      class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"
                      id="password" name="password" value="" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> --}}
                    <button type="submit" class="btn btn-primary mb-2 animated fadeInUp">
                        {{ __('Login') }}
                    </button>
                    <ul class="cp">
                        <li>&copy; Copyright Kidspiration 2021</li>
                    </ul>
                  </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
